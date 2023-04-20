<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Menu;

class WelcomeController extends Controller
{

    public function index()
    {
       $menus = Menu::limit(3)->get();
       $specials = Catagory::where('name','specials')->first();
        return view('welcome',compact('specials','menus'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
