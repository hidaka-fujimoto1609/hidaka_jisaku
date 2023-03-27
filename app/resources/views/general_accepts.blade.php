@extends('layouts.app')
@section('content')

@if($requests !== [])
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
             <th>住所</th> 
             <th>開始時間</th> 
             <th>終了時間</th> 
             <th>詳細</th> 
             </tr>
         </thead>
         <tbody>
         @foreach( $requests as $site)
             <tr>
                <td>{{$site->site->rep_name}}</td>
                
                <td>{{$site->site->site_name}}</td>
               
                <td>{{$site->site->started_at}}</td>

                <td>{{$site->site->address}}</td>

                <td>{{$site->site->started_time}}</td>

                <td>{{$site->site->end_time}}</td>

                <td>{{$site->site->memo}}</td>

                <td>
                <a class="btn btn-primary mb-12" href="{{route('acceptssite',['id'=>$site['id']])}}" >承認</a>
                <a class="btn btn-primary mb-12" href="{{route('rejected',['id'=>$site['id']])}}" >拒否</a>

            </tr>
            @endforeach
         </tbody>
     </table>
 </div>
</div>
@else
依頼されている案件はありません。
@endif
@endsection



