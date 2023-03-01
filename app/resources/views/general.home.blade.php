@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a href="{{route('sinkoutyu_general')}}">
                    進行中現場
                </a>
                <a href="{{route('accepts')}}">
                  依頼受託
                </a>
                <a href="{{route('members')}}">
                 会員情報
                </a>
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
