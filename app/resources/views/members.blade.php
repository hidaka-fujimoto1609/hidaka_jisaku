@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center ">
    <h4 class="gradation02 mb-5">プロフィール</h4>
</div>
<div class='panel-body d-flex justify-content-center'>
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

<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>誕生日</th>
                 <th>所属部署</th>
                 <th>健康診断日</th>
                 <th>資格、歴</th>
                 <th>免許写真</th>
             </tr>
         </thead>
         <tbody>
         @foreach($personals as $personal)
             <tr>
                <td>{{$personal['birth']}}</td>
                
                <td>{{$personal['department_name']}}</td>
               
                <td>{{$personal['health_check_date']}}</td>

                <td>{{$personal['contents']}}</td>

                <td><img src="{{asset('storage/images/'.$personal['image_path'])}}" width ="130" hitght="60" alt="personal"> </td>

                <td><div class="membermodal">
                    <button  class="btn btn-primary mb-12" >編集</button>
                <div class="modal fade" id="memberModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">プロフィール編集</h5>
                            </div>
                                <form action="{{route('member.update',$personal->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for='site_name'>誕生日</label>
                                        <input type='text' class='form-control' value="{{$personal['birth']}}"  name='birth'  value="{{ old('birth')}}"/>
                                    </div>

                                    <div class="form-group">
                                        <label for='rep_name'>所属部署</label>
                                        <input type='text' class='form-control'value="{{$personal['department_name']}}"  name='department_name'  value="{{ old('department_name')}}"/>
                                    </div>
                                    <div class="form-group">
                                            <label for='date' class='mt-2'>健康診断日</label>
                                            <input type='date' class='form-control'value="{{$personal['health_check_date']}}"  name='health_check_date'  value="{{ old('health_check_date')}}"/>
                                    </div>

                                    <div class="form-group">
                                            <label for='date' class='mt-2'>資格、歴</label>
                                            <input type='text' class='form-control'value="{{$personal['contents']}}"  name='contents' value="{{ old('contents')}}"/>
                                    </div>

                                    <div class="form-group">
                                        <label for='text'>所有免許等画像</label>
                                        <input type='file'class='form-control' name='image_path' />
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                    <button id="btn3" class="btn btn-primary">編集完了</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            </td>
            </tr>
            @endforeach
         </tbody>
     </table>
 </div>
</div>
</td>

    </table>


    </div>
</div>
@endsection