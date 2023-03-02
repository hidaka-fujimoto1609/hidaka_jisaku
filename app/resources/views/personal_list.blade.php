@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
    <h4 class="mx-2">イベントを追加</h4>
    <button type="button" id="btn1" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal">追加</button>
</div>
<div class="d-flex justify-content-center">
    <div id='calendar'></div>
</div>

<div class="modal fade" id="testModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">イベントを追加する</h5>
            </div>

            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>イベント名</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="イベント名">
                    </div>
                    <div class="form-group">
                        <label>日付</label>
                        <input type="date" name="start" id="start" class="form-control" placeholder="年/月/日">
                    </div>
                    <div class="form-group">
                        <label>カラー</label><br>
                        <input type="color" name="textColor" id="textColor" class="">
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
@endsection