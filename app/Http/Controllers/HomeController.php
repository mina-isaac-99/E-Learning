<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class HomeController extends Controller
{
    //
    function home()
    {
        $courses=Course::get();
        return view('User.home',['courses'=>$courses]);
    }
    function profile()
    {
        return view('User.profile');
    }
}
