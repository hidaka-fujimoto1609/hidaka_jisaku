@extends('layouts.app')
@section('content')
<form method="GET" action="{{ route('serch.index') }}">
    <input type="search" placeholder="担当部署を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
    <div>
        <button type="submit">検索</button>
        <button>
            <a href="{{ route('serch.index') }}" class="text-white">
                クリア
            </a>
        </button>
    </div>
</form>
<div class="d-flex justify-content-center">
    <h4 class="gradation02 mb-5">人員リスト</h4>
</div>
<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>名前</th>
                 <th>生年月日</th>
                 <th>所属部署</th>
                 <th>健康診断日</th>
                 <th>資格、歴</th>
                 <th>所有免許等画像</th>
             </tr>
         </thead>
         <tbody>
         @foreach($personals as $personal)
             <tr>
                <td>{{$personal['user_neme']}}</td>
                
                <td>{{$personal['birth']}}</td>
               
                <td>{{$personal['department_name']}}</td>

                <td>{{$personal['health_check_date']}}</td>

                <td>{{$personal['contents']}}</td>

                <td><img src="{{asset('storage/images/'.$personal['image_path'])}}" width ="130" hitght="60" alt="personal"> </td>
                
                <td><a href="" class="text-decoration-none">削除</a>
                /
                <a href="" class="text-decoration-none">編集</a></td>
            </tr>
            
            @endforeach
         </tbody>
     </table>
 </div>
</div>
@endsection