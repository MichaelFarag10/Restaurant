<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Catagory\CatagoryRequest;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Catagory::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatagoryRequest $request)
    {
        $image = $request->file('image')->store('public/categories');

       Catagory::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
       ]);


        return to_route('admin.categories.index')->with('success','Category Created successfully!!');
    }

    public function edit(Catagory $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $category)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);
        $image = $category->image;
        if($request->hasFile('image')){
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/categories');
        }
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);
        return to_route('admin.categories.index')->with('success','Category Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(catagory $category)
    {
        Storage::delete($category->image);
        $category->menus()->detach();
        $category->delete();
        return to_route('admin.categories.index')->with('dager','Category deleted !');
    }
}
