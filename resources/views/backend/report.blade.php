@extends('layouts.design')
@section('title','Báo cáo tổng quát - Bnet')
@section('content')
<!-- BEGIN CONTENT -->
     <div class="page-content-wrapper">
       <div class="page-content">
         <div class="dashboard">

           <div class="portlet box green1 margin-page">
             <div class="portlet-title">
               <div class="caption">
                 <img src="images/ic3.gif" alt=""> <span>BÁO CÁO VỀ SỬ DỤNG DỮ LIỆU THEO THÁNG, NĂM</span> </div>
               <div class="tools">
                 <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                 <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                 <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                 <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
               </div>
             </div>
             <div class="portlet-body">

               <div class="table-scrollable">
                 <table class="table table-bordered table-hover">
                   <thead>
                     <tr>
                       <th>STT</th>
                       <th>TÊN ỨNG DỤNG</th>
                       <th>DỮ LIỆU CÔNG DÂN</th>
                       <th>DỮ LIỆU BẢO HIỂM</th>
                       <th>DỮ LIỆU N</th>

                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>01</td>
                       <td>bnetagen</td>
                       <td class="number">{{ count($repCD) }}</td>
                       <td class="number">{{ count($repBH) }}</td>
                       <td class="number">no info</td>
                     </tr>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
           <div class="portlet box margin-page">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">LỊCH SỬ TRUY CẬP</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>STT</th>
                              <th>ID NGƯỜI DÙNG</th>
                              <th>NGƯỜI DÙNG</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($replogin as $user)
                              <td>{{$n}}</td>
                              <td>{{$user->identityId}}</td>
                              <td>{{$user->name}}</td>
                              
                              @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>STT</th>
                              <th>ID NGƯỜI DÙNG</th>
                              <th>NGƯỜI DÙNG</th>
                            </tr>
                            </tfoot>
                          </table>

                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
         </div>
       </div>
     </div>
     <!-- END CONTENT -->
     <!-- BEGIN QUICK SIDEBAR -->
    
     <!-- END QUICK SIDEBAR -->
  
   <!-- END CONTAINER -->



@endsection
