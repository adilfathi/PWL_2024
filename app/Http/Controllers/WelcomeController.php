<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function hello(){
        return "hello world";
    }
    function greetings(){
        return view('blog.hello')
        ->with('name','Andi')
        ->with('occupation','Astronaut');;

    }
}

