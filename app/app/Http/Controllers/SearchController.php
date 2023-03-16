<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Personal;

use App\Site;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // $keyword = $request->input('search');
        // //dd($keyword);
        // $personal= Personal::query();

        $sites = Site::all();

        // if(!empty($keyword)) {
        //     $personal->where('department_name', 'LIKE', "%{$keyword}%");
        // }

        // $personals = $personal->get();
        ///dd($personals);




        // ユーザー一覧をページネートで取得
        $personals = Personal::paginate(20);
        //検索フォームで入力された値を取得する
        $search = $request->input('search');

        // クエリビルダ
        $query = Personal::query();

       // もし検索フォームにキーワードが入力されたら
        if ($search) {

            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');

            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            //dd($wordArraySearched);
            //単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
            foreach($wordArraySearched as $value) {
                $query->where('department_name', 'like', '%'.$value.'%')->orWhere('contents','like', '%'.$value.'%');
            }
            
            //上記で取得した$queryをページネートにし、変数$usersに代入
            $personals = $query->paginate(20);
            //dd($personals);

        }
        return view('personal_list', compact('personals','sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
