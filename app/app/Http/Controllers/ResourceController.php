<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Site;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site_list = Site::all();
        return view('site_list',[
            'sites'=>$site_list
        ]);
       //return view('site_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(1234);
        $site = new Site;

        $site->site_name = $request->site_name;
        $site->rep_name = $request->rep_name;
        $site->started_at = $request->started_at;
        $site->address = $request->address;
        $site->detail = $request->detail;
        $site->started_time = $request->started_time;
        $site->end_time = $request->end_time;

        $site->save();
        $site_list = Site::all();
        return view('site_list',[
            'sites'=>$site_list
        ]);
        //dd(1234);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //編集
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
