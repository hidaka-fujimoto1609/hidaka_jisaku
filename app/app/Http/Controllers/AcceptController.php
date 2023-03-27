<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accept;
use App\Site;
use App\Personal;
use Illuminate\Support\Facades\Auth;


class AcceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accept = new Accept;
        $accept_with_site = $accept->with('site')->where('user_id',Auth::id())->where('is_accept',NULL)->get();
    
        //dd($accept_with_site);

    //    if($accept_with_site->is_accept==null){
    //     return view('general_accepts',[
    //         'requests'=> $accept_with_site
    //     ]);
    //    }else{
    //     return view('general_accepts');
    //    }
       return view('general_accepts',[
        'requests'=> $accept_with_site
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
        $accept = new Accept;

        $accepts = $accept->find($id);

        if($accepts->is_accept==1){
             return redirect('accepts');
        }


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
