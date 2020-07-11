<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Link;

class MenuController extends Controller
{
    public function index(){
        Menu::macro('main', function() {
            return Menu::new()
                ->route('home', 'Home')
                ->route('login', 'Login')
                ->route('logout', 'Logout');
        });
        return view('menu.index');
    }
}
