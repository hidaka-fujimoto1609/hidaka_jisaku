人員リストです。
<!--依頼フォーム-->
<form action="{{route('personal')}}" method="post">
<label for='site_name'>現場名</label>
<input type='text' class='form-control' name='site_name'  value="{{ old('site_name')}}"/>
<label for='date' class='mt-2'>住所</label>
<input type='text' class='form-control' name='address' value="{{ old('address')}}"/>
<label for='date' class='mt-2'>日付</label>
<input type='date' class='form-control' name='started_at' id='started_at'  value="{{ old('started_athk')}}"/>
<label for='date' class='mt-2'>日付</label>dcd
</form>
