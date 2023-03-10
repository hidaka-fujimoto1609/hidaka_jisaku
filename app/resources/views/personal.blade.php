@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
    <h4 class="mx-2">依頼追加</h4>
    <button type="button" id="btn1" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal">追加</button>
</div>
<div class="d-flex justify-content-center">
    <div id='calendar'></div>
</div>

追加でテキストエリア＜備考欄＞
name属性で持ってくる

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">依頼追加</h5>
            </div>

            <form action="{{route('personal.store')}}" method="post">
               
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                    <label>担当者名</label>
                            <select name='rep_name' class='form-control'>
                                <label>担当者名</label>
                                @foreach($sites as $site)
                                <option >{{ $site['site_name'],$site['started_at'] }}</option>
                                @endforeach
                            </select>
                    </div>
                    <label for='memo' class='mt-2'>備考欄</label>
<textarea class='form-control' name='memo'></textarea>
                   
                               <div class='row justify-content-center'>
<button class='btn btn-primary w-25 mt-3'>登録</button>
</div>
                
                </div>
            </form>
        </div>
    </div>

@endsection