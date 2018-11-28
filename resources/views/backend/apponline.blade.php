@extends('layouts.design')
@section('title','Chi tiết điện tử - Bnet')
@section('content')
<!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
       <div class="page-content">
           <div class="dashboard">

               <div class="portlet box green1 margin-page">
                   <div class="portlet-title">
                       <div class="caption">
                           <img src="images/ic3.gif" alt=""> <span>ỨNG DỤNG ONLINE</span> </div>
                       <div class="tools">
                           <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                           <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                               title=""> </a>
                           <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                           <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                       </div>
                   </div>
                   <div class="portlet-body">
                       <div class="detail-app">
                           <h5 class="title">
                               ứng dụng ABS
                           </h5>
                           <p class="desc">
                               <span>mô tả ứng dụng:</span> Ứng dụng đang hoạt động qua hệ thống quản lý Bnet
                           </p>
                           <p class="desc">
                               Chi tiết: Cập nhật liên tục ứng dụng đang trực tuyến và sử dụng dữ liệu của bnet
                           </p>
                       </div>
                       <div class="table-scrollable">
                           <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>STT</th>
                                       <th>Ứng dụng</th>
                                       <th>Id ứng dụng</th>
                                       <th>Chi tiết</th>
                                       <th>Thời gian trự tuyến</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>01</td>
                                       <td>Dữ liệu</td>
                                       <td>Tài nguyên 1</td>
                                       <td>Thông số 2</td>
                                       <td>Thông số 1</td>


                                   </tr>
                                   <tr>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>


                                   </tr>
                                   <tr>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>


                                   </tr>
                                   <tr>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>


                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
<!-- END CONTENT -->


@endsection
