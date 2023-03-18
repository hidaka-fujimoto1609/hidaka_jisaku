<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

use App\Site;

use App\Accept;

use Illuminate\Support\Facades\Auth;



class DisplayController extends Controller
{
    public function sinkoutyu(){
        return view('site');
    }
    

    public function personal(){
        return view('personal');
    }

    public function index(){
        $accept = Accept::select('title','start','textColor')->where('user_id',Auth::id())->get();//is_accept
        //dd($accept);
        return view('home',[
            'accepts' => $accept,
        ]);
    }

    public function accepts(){

        return view('general_accepts');
    }

    public function general(){
        return view('general_home');
    }

     
}

