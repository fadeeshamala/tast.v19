<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($name , $age){

        return view('index', compact('name','age'));
    }
}

