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
        
        $accept = Accept::select('title','start','color')->where('user_id',Auth::id())->where('is_accept',1)->get();//is_accept
        $site = Site::select('title','start','color')->get();
        $member = Accept::with('personal')->where('is_accept',1)->get();
        //($member);
        //dd($site);
        //dd($member);
        return view('home',[
            'accepts' => $accept,
            'sites'=>$site,
            'members'=>$member,
        ]);
    }

    public function accepts(){

        return view('general_accepts');
    }

    public function general(){
        return view('general_home');
    }

    
    //  public function deletesite(){
    //     $site = Site::find($id);
    //     $site->site_name = $request->site_name;
    //     $site->rep_name = $request->rep_name;
    //     $site->started_at = $request->started_at;
    //     $site->address = $request->address;
    //     $site->detail = $request->detail;
    //     $site->started_time = $request->started_time;
    //     $site->end_time = $request->end_time;


    //     $site->delete();

    //     return redirect('site_list');


     //}

    public function acceptssite(int $id){
    //dd($id);
        $accept = new Accept;

        $accepts = $accept->find($id);

        $accepts->is_accept=1;

        $accepts->save();

        return redirect('/');
    }

        function rejected(int $id){
        $accept = new Accept;

        $accepts = $accept->find($id);

        $accepts->is_accept=0;

        $accepts->save();

        return redirect('/');
    }

    
    // public function acceptmember(){

    //     dd($accept_with_sites);
        
    //     $accept = 
    //     $accept_with_site = $accept->with('site')->where('is_accept',1)->get();
    //     return view('home',[
    //         'accept_with_sites'=> $accept_with_site
    //     ]);
    // }

}

