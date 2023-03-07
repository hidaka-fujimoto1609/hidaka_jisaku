@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
    <h4 class="mx-2">依頼追加</h4>
    <button type="button" id="btn1" class="btn btn-primary mb-12" data-toggle="modal" data-target="#testModal">追加</button>
</div>
<div class="d-flex justify-content-center">
    <div id='calendar'></div>
</div>


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">依頼追加</h5>
            </div>

            <form action="{{route('accept.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                    <label>担当者名</label>
                            <select name='rep_name' class='form-control'>
                                <option value='' hidden>担当者名</option>
                                @foreach($sites as $site)
                                <option value="{{ $site['id']}}">{{ $site['rep_name'] }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                    <label>現場名</label>
                            <select name='site_name' class='form-control'>
                                <option value='' hidden>現場名</option>
                                @foreach($sites as $site)
                                <option value="{{ $site['id']}}">{{ $site['site_name'] }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                    <label>開始日</label>
                            <select name='started_at' class='form-control'>
                                <option value='' hidden>現場名</option>
                                @foreach($sites as $site)
                                <option value="{{ $site['id']}}">{{ $site['started_at'] }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                    <label>開始時間</label>
                            <select name='started_at' class='form-control'>
                                <option value='' hidden>開始時間</option>
                                @foreach($sites as $site)
                                <option value="{{ $site['id']}}">{{ $site['started_time'] }}</option>
                                @endforeach
                            </select>
                    </div>
                    <label>終了時間</label>
                            <select name='started_at' class='form-control'>
                                <option value='' hidden>終了時間</option>
                                @foreach($sites as $site)
                                <option value="{{ $site['id']}}">{{ $site['end_time'] }}</option>
                                @endforeach
                            </select>
                    </div>
                    <label for='memo' class='mt-2'>詳細</label>
                        <textarea class='form-control' name='memo'></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button id="btn2" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>

@endsection