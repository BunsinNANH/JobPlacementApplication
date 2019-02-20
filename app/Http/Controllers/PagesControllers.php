<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function layout(){
        return view('layout.layout');
    }

    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
}
