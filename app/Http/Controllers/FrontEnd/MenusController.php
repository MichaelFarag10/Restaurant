<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
class MenusController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index',compact('menus'));
    }
}
