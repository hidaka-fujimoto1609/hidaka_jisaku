依頼受託フォーム
@extends('layouts.app')
@section('content')


</table>
<div class="d-flex justify-content-center">
    <h4 class="gradation02 mb-5">依頼一覧</h4>
</div>
<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>担当者名</th>
                 <th>現場名</th>
                 <th>開始日</th>
                 <th>開始時間</th>
                 <th>終了時間</th>
                 <th>詳細</th>
             </tr>
         </thead>
         <tbody>
         @foreach( $sites as $site)
             <tr>
                <td>{{$site['rep_name']}}</td>
                
                <td>{{$site['site_name']}}</td>
               
                <td>{{$site['started_at']}}</td>

                <td>{{$site['address']}}</td>

                <td>{{$site['started_time']}}</td>

                <td>{{$site['end_time']}}</td>

                <td>{{$site['memo']}}</td>
                
                <td><a href="" class="text-decoration-none"></a>
                /
                <a href="" class="text-decoration-none">編集</a></td>
            </tr>
            @endforeach
         </tbody>
     </table>
 </div>
</div>
@endsection



