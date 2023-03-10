@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a href="{{route('resource.index')}}">
                    進行中現場
                </a>
                <a href="{{route('resource.create')}}">
                    進行中現場リスト
                </a>
                <a href="{{route('personal.index')}}">
                   人員リスト
                </a>
                <a href="{{route('personallist.index')}}">
                   人員
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
