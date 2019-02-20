<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsControllers extends Controller
{
    public function getStudent(){
        return view('pages.student');
    }
}
