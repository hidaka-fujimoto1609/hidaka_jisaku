@extends('layouts.app')
@section('content')
@can ('admin_only')
  <span>管理者にだけ表示させる</span>
<div class="container">
    
     <!--<a href="{{route('resource.index')}}">進行中現場</a>-->
                <!--<a href="{{route('resource.create')}}">進行中現場リスト</a>-->
                <!--<button type="button" class="btn btn-outline-primary" ><a href="{{route('resource.create')}}">進行中現場リスト</a></button>-->
                <!--<a href="{{route('personal.index')}}">人員リスト</a>-->
                <!--<button type="button" class="btn btn-outline-primary" ><a href="{{route('personallist.index')}}">人員</a></button>-->
    
</div>

            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');//要素を取得
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'  //イベントクリック、日付クリックモーダル
                });
                calendar.render();//実行
            });
        </script>
@elsecan('user_only')
<div class="container">
    <div class="row justify-content-center">
    <a href="{{route('sinkoutyu_general')}}">
                    進行中現場
                </a>
                <a href="{{route('accept.create')}}">
                  依頼受託
                </a>
                <a href="{{route('member.index')}}">
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
@endcan
@endsection
