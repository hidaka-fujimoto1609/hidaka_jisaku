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
                    <form action="{{route('personal')}}" method="post">
                    @csrf
                    <label for='site_name'>依頼者</label>
                    <select class="form-control" id="'user_id" name="'user_id">
                    @foreach ($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->user_id }}</option>
                    @endforeach
                    </select>
                    <label for='site_name'>現場名</label>
                    <select class="form-control" id="'site_id" name="'site_id">
                    @foreach ($sites as $site)
                    <option value="{{ $site->site_id }}">{{ $site->site_id }}</option>
                    @endforeach
                    </select>
                    <label for='memo' class='mt-2'>詳細</label>
                    <textarea class='form-control' name='memo'></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection