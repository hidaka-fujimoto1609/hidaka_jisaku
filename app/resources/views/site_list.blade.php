@extends('layouts.app')
@section('content')

<!--<div class="d-flex justify-content-center">
    <h4 class="mx-2">現場を登録</h4>
    <button type="button" id="btn1" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal">追加</button>
</div>-->
<div class="modal fade" id="testModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">現場を登録</h5>
            </div>

            
            <form action="{{route('resource.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for='site_name'>現場名</label>
                        <input type='text' class='form-control' name='site_name'  value="{{ old('site_name')}}"/>
                    </div>

                    <div class="form-group">
                        <label for='rep_name'>担当者名</label>
                        <input type='text' class='form-control' name='rep_name'  value="{{ old('rep_name')}}"/>
                    </div>
                    <div class="form-group">
                            <label for='date' class='mt-2'>日付</label>
                            <input type='date' class='form-control' name='started_at' id='started_at'  value="{{ old('started_at')}}"/>
                    </div>

                    <div class="form-group">
                            <label for='date' class='mt-2'>住所</label>
                            <input type='text' class='form-control' name='address' value="{{ old('address')}}"/>
                    </div>

                    <div class="form-group">
                            <label for='started_time'>開始時間</label>
                            <input type='time' class='form-control' name='started_time'  value="{{ old('started_time')}}"/>
                    </div>
                    <div class="form-group">
                        <label for='end_time'>終了時間</label>
                        <input type='time' class='form-control' name='end_time'  value="{{ old('end_time')}}"/>
                    </div>
                    
                    <div class="form-group">
                        <label for='detail' class='mt-2'>現場詳細</label>
                        <textarea class='form-control' name='detail'></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button id="btn2" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#btn1').click(function(){
            console.log(123);
        })
    })
</script>



</table>
<div class="d-flex justify-content-center">
    <h4 class="gradation02 mb-5">現場一覧</h4>
</div>

<button type="button" id="btn1" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal">追加</button>

<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>現場名</th>
                 <th>担当者名</th>
                 <th>開始日</th>
                 <th>住所</th>
                 <th>開始時間</th>
                 <th>終了時間</th>
                 <th>詳細</th>
             </tr>
         </thead>
         <tbody>
         @foreach($sites as $site)
             <tr>
                <td>{{$site['site_name']}}</td>
                
                <td>{{$site['rep_name']}}</td>
               
                <td>{{$site['started_at']}}</td>

                <td>{{$site['address']}}</td>

                <td>{{$site['started_time']}}</td>

                <td>{{$site['end_time']}}</td>

                <td>{{$site['detail']}}</td>
                
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














