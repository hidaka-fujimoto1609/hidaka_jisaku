進行中現場リストです。
<!--現場登録フォーム-->
<form action="{{route('resource.store')}}" method="post">
@csrf
<label for='site_name'>現場名</label>
<input type='text' class='form-control' name='site_name'  value="{{ old('site_name')}}"/>
<label for='rep_name'>担当者名</label>
<input type='text' class='form-control' name='rep_name'  value="{{ old('rep_name')}}"/>
<label for='date' class='mt-2'>日付</label>
<input type='date' class='form-control' name='started_at' id='started_at'  value="{{ old('started_athk')}}"/>
<label for='date' class='mt-2'>住所</label>
<input type='text' class='form-control' name='address' value="{{ old('address')}}"/>
<label for='detail' class='mt-2'>現場詳細</label>
<textarea class='form-control' name='detail'></textarea>

<div class='row justify-content-center'>
<button class='btn btn-primary w-25 mt-3'>登録</button>
</div> 
</form>


<table class='table'>
<thead>
<tr>
<th scope='col'>現場名</th>
<th scope='col'>担当者名</th>
<th scope='col'>日付</th>
<th scope='col'>住所</th>
<th scope='col'>現場詳細</th>
<!--削除ボタン-->
</tr>
</thead>

</table>