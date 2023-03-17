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
            initialView: 'dayGridMonth',  //イベントクリック、日付クリックモーダル
            dateClick:function(date,view) {
                $('#callenderModal1').modal('toggle');
                return false;
                //alert('Clicked on: ' );
            }
        });
        calendar.render();//実行
    });
</script>

<div class="modal fade" id="callenderModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h class="modal-title" text-algin:center><h5>依頼追加</h5>
                <form action="{{route('calendar.store')}}" method="post">
                @csrf             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button id="request2" class="btn btn-primary">依頼</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>



@elsecan('user_only')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('sinkoutyu_general')}}">進行中現場</a>
                <a href="{{route('accept.create')}}">
                  依頼受託

                </a>
                <a href="{{route('member.index')}}">
                 会員情報
                </a>
            </div>
            <div class="m-auto w-100 m-5 p-5">
                <div id='calendar1'></div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar1');//要素を取得
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'  //イベントクリック、日付クリックモーダル
                });
                calendar.render();//実行
            });
        </script>
    </div>
</div>
@endcan
@endsection
