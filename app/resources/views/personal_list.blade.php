@extends('layouts.admin_home')
@section('content')




<h4 class="gradation02 mb-5">人員リスト</h4>
<div class="d-flex justify-content-center">
<form method="get" action="{{ route('search.index') }}">
    <input type="search" placeholder="担当部署を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
   
        <button type="submit">検索</button> 
</form>
</div>
<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>名前</th>
                 <th>生年月日</th>
                 <th>所属部署</th>
                 <th>健康診断日</th>
                 <th>資格、歴</th>
                 <th>所有免許等画像</th>
             </tr>
         </thead>
         <tbody>
         @foreach($personals as $personal)
             <tr>
                <td>{{$personal->user->name}}</td>
                
                <td>{{$personal['birth']}}</td>
               
                <td>{{$personal['department_name']}}</td>

                <td>{{$personal['health_check_date']}}</td>

                <td>{{$personal['contents']}}</td>

                <td><img src="{{asset('storage/images/'.$personal['image_path'])}}" width ="130" hitght="60" alt="personal"> </td>
                
                
                <td>
                    <div class="personalmodal">   
                    <button class="btn btn-primary" >依頼</button>
                        <div class="modal fade" id="requestModal1"  tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">シフト依頼</h5>
                                        
                                    </div>
                        
                                    <form action="{{route('personal.store')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input name="id" value="{{$personal->id}}" type="hidden">
                                            <label>現場名</label>
                                                    <select name='site_id' class='form-control'>
                                                        <label>現場名</label>
                                                        @foreach($sites as $site)
                                                        <option value="{{$site['id']}}">現場名:{{ $site['site_name']}},開始日:{{ $site['started_at']}}</option>
                                                        
                                                        @endforeach
                                                    </select>
                                                </div>
                                            <div class="form-group">
                                                <label for='memo' class='mt-2'>備考欄</label>
                                                <textarea class='form-control' name='memo'></textarea>
                                            </div>                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                            <button id="request2" class="btn btn-primary" >依頼</button>
                                        </div>
                                    </form>
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
@endsection