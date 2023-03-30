@extends('layouts.app')
@section('content')
@can ('admin_only')
  
<div class="d-flex justify-content-center">
<h2>進行中現場カレンダー</h2>
</div>

<div class="m-auto w-50 m-5 p-5">
    <div id='calendar'></div>
</div>
        
<script>
    let events = <?php echo $sites;?>;
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');//要素を取得
        var calendar = new FullCalendar.Calendar(calendarEl, {
          events:events,   //イベントクリック、日付クリックモーダル
          eventClick:(e)=>{
                        console.log(e.event.start);
                        let find = $('#callenderModal1').find('#title');
                        find.val(e.event.title);
                        $('#callenderModal1').modal('toggle');//formタグ、アクション先、route{google_api} metot=post
                return false;
                    }
                });
        calendar.render();//実行
    });
</script>

<div class="modal fade" id="callenderModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                <h class="modal-title" text-algin:center><h5>登録</h5>
                <form action="{{route('google_api')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>現場名</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="イベント名" value="a">
                    </div>

                </div>       
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button id="request2" class="btn btn-primary">googleカレンダーに登録</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
<h4 class="gradation02 mb-5">承認者リスト</h4>
</div>
<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>名前</th>
                 <th>担当部署</th>
             </tr>
         </thead>
         <tbody>
          
         @foreach($members as $personal)
             <tr>
                <td>{{$personal->user->name}}</td>
                
                <td>{{$personal->personal->department_name}}</td>
                
            </tr>
            @endforeach
         </tbody>
     </table>
 </div>
</div>



@elsecan('user_only')
<div class="container">
    <!--<div class="row justify-content-center">
                <a href="{{route('accept.create')}}">
                  依頼受託

                </a>
                <a href="{{route('member.index')}}">
                 会員情報
                </a>
            </div>-->
            <div class="m-auto w-100 m-5 p-5">
                <div id='calendar1'></div>
                <div class="modal fade" id="callenderModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h class="modal-title" text-algin:center><h5>登録</h5>
                <form action="{{route('google_api')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>現場名</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="イベント名" value="a">
                    </div>

                </div>       
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button id="request2" class="btn btn-primary">googleカレンダーに登録</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>

    </div>
</div>
        <script>
            let events = <?php echo $accepts;?>;
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar1');//要素を取得
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    //initialView: 'dayGridMonth',  //イベントクリック、日付クリックモーダル
                    events:events, 
                    eventClick:(e)=>{
                        console.log(e.event.start);
                        let find = $('#callenderModal1').find('#title');
                        find.val(e.event.title);
                        $('#callenderModal1').modal('toggle');//formタグ、アクション先、route{google_api} metot=post
                return false;
                    }
                });
                calendar.render();//実行
            });
        </script>


@endcan
@endsection
