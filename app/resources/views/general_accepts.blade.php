依頼受託フォーム
@extends('layouts.app')
@section('content')
</table>
<div class="d-flex justify-content-center">
    <h4 class="gradation02 mb-5">依頼一覧</h4>
</div>
<div class="d-flex justify-content-center">
 <div class="col-5 ml-3">
     <table class="table table-striped table-hover">
         <thead>
             <tr>
    
             </tr>
         </thead>
         <tbody>
         @foreach( $requests as $site)
             <tr>
                <td>{{$site->site->rep_name}}</td>
                
                <td>{{$site->site->site_name}}</td>
               
                <td>{{$site->site->started_at}}</td>

                <td>{{$site->site->address}}</td>

                <td>{{$site->site->started_time}}</td>

                <td>{{$site->site->end_time}}</td>

                <td>{{$site->site->memo}}</td>


                <td><a href="" class="text-decoration-none">承認</a>
                <button type="button" id="detailbtn1" class="btn btn-primary mb-12" >拒否</button></td>
            </tr>
            @endforeach
         </tbody>
     </table>
 </div>
</div>
@endsection



