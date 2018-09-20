<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\static_content;

class static_controller extends Controller
{
    public function index()
    {
    	//$home = static_content::where('id',1)->first();
        //return view('index', compact('home'));
        return view('index');
    }
}