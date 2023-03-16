@extends('layouts.app')
@section('content')


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
                            <select name='site_id' class='form-control'>
                                <label>現場名</label>
                                @foreach($sites as $site)
                                <option value="{{$site['id']}}">{{ $site['site_name']}}</option>
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