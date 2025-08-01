<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
{
    $menus = Menu::with(['category', 'photos'])->get();

    return view('menus.index', compact('menus'));
}


public function show(Menu $menu)
{
    $menu->load(['photos', 'category']); 
    return view('menus.show', compact('menu'));
}


}
