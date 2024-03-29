<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

use App\Site;

use App\Accept;


class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $site_list = Site::all();
        return view('personal',[
            'sites'=>$site_list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site_list = Site::all();
        return view('pesonarl',[
            'sites'=>$site_list
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $accept = new Accept;

        $site = Site::where('id',$request->site_id)->first();
        //acceptカラムに必要なのか
        //useriｄは１をいれる
       
        //dd($request->id);
        $accept->user_id = $request->id;
        $accept->site_id = $request->site_id;
        $accept->memo =  $request->memo;
        $accept->title = $site->site_name;
        $accept->start = $site->started_at;
        $accept->color = $request->textColor;
        // $site->site_name = $request->site_name;
        // $site->rep_name = $request->rep_name;
        // $site->started_at = $request->started_at;
        // $site->address = $request->address;
        // $site->detail = $request->detail;
        // $site->started_time = $request->started_time;
        // $site->end_time = $request->end_time;
        
        $accept->save();
       
        
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
?>