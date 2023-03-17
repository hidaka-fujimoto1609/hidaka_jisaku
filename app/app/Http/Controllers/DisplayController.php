<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

use App\Site;



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

    public function accepts(){

        return view('general_accepts');
    }

    public function general(){
        return view('general_home');
    }

     
}

