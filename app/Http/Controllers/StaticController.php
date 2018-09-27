<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticContent;

class StaticController extends Controller
{
    public function index()
    {
    	//$home = static_contents::where('id',1)->first();
        //return view('index', compact('home'));
        return view('index');
    }
}