<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Catagory;
use App\Http\Requests\Menu\MenuRequest;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Catagory::all();
        return view('admin.menus.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        $image = $request->file('image')->store('public/menus');
        $menu = Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image
        ]);
        if($request->has('categories')){
            $menu->categories()->attach($request->categories);
        }

        return to_route('admin.menus.index')->with('success','Menu created successfully!!');
    }

    public function edit(Menu $menu)
    {
        $categories = Catagory::all();
       return view('admin.menus.edit',compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $image = $menu->image;
        if($request->hasFile('image')){

            Storage::delete($menu->image);
            $image = $request->file('image')->store('public/menus');
        }
        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image,

        ]);
        if($request->has('categories')){
            $menu->categories()->sync($request->categories);
        }

        return to_route('admin.menus.index')->with('success','Menu updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image);
        $menu->categories()->detach();
        $menu->delete();
        return to_route('admin.menus.index')->with('danger','Menu deleted!!');
    }
}
