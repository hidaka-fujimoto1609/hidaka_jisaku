<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function sinkoutyu(){
        return view('site');
    }
    

    public function personal(){
        return view('personal');
    }

    public function index(){
        return view('home');
    }
}

