@extends('layouts.app')
@section('content')
人員リストです。
<!--依頼フォーム-->
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
@endsection