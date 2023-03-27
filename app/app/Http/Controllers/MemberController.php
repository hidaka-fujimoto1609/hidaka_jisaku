<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Personal;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserData;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::where('user_id',Auth::id())->get();
        //dd($personal);
        if($personal->isEmpty()){
            return view('general_members');
        }else{
            return view('members',[
                'personals'=>$personal
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = Personal::where('user_id',Auth::id())->get();
        return view('members',[
            'personals'=>$personal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserData $request)
    {
        //dd($request->file('image_path'));
       
        $dir = 'images';   
        $file_name = $request->file('image_path')->getClientOriginalName();
        $request->file('image_path')->storeAs('public/images' , $file_name);
       
        $personal = new Personal;
        $personal->user_id = Auth::id();
        $personal->birth = $request->birth;
        $personal->department_name = $request->department_name;
        $personal->health_check_date = $request->health_check_date;
        $personal->contents = $request->contents;
        $personal->image_path = $file_name;

        $personal->save();
        return redirect('member');
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
    public function update(UserData $request, int $id)
    {
        $dir = 'images';
        $file_name = $request->file('image_path')->getClientOriginalName();
        $request->file('image_path')->storeAs('public/images' , $file_name);
        
        $member = new Personal;
        //$member->user_id = Auth::id();
        
        $personal = $member->find($id);
        
        //dd($member);
        $personal->birth = $request->birth;
        $personal->department_name = $request->department_name;
        $personal->health_check_date = $request->health_check_date;
        $personal->contents = $request->contents;
        $personal->image_path = $file_name;
        

        $personal->save();

        return redirect('member');
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
