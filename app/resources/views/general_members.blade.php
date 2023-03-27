@extends('layouts.app')
@section('content')
<div class="modal-content1">
            <div class="modal-header1">
                <h5 class="modal-title">依頼追加</h5>
            </div>
            <div class='panel-body'>
                            @if($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach($errors->all() as $message)
                                    <li>{{$message}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div> 
<form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
@csrf

<label for='date' class='mt-2'>誕生日</label>
<input type='date' class='form-control' name='birth' id='birth'  value="{{ old('birth')}}"/>
<label for='date' class='mt-2'>所属部署</label>
<input type='text' class='form-control' name='department_name' value="{{ old('department_name')}}"/>
<label for='date' class='mt-2'>健康診断日</label>
<input type='date' class='form-control' name='health_check_date' id='health_check_date'  value="{{ old('health_check_date')}}"/>
<label for='contents' class='mt-2'>資格、歴</label>
<textarea class='form-control' name='contents'></textarea>
<div class='row justify-content-center'>
<label for='text'>所有免許等画像</label>
<input type='file'class='form-control' name='image_path'  value="{{ old('image_path')}}"/>
<button class='btn btn-primary w-25 mt-3'>登録</button>
</div> 
</form>
</div>
@endsection