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
                 <img src="images/ic3.gif" alt=""> <span>Quyền người dùng:</span> </div>
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
                       <th>Quyền người dùng</th>
                       <th>Trạng thái</th>
                       <th>Hành động</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>01</td>
                       <td>bnetagen</td>
                       <td>01</td>
                       <td>bnetagen</td>
                     </tr>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- END CONTAINER -->


<div class="page-content-wrapper">
   <div class="page-content">
       <div class="dashboard">

         <div class="modal-content">
             <div class="modal-header">

                 <h4 class="modal-title">Chỉnh sửa / thêm ứng dụng</h4>
             </div>
             <form method="post" action="{{ url('admin/app/add') }}"> {{ csrf_field() }}
             <div class="modal-body">
                 <div class="item">
                     <label for="">Tên ứng dụng:</label>
                     <input type="text" class="input-modal" name="name">
                 </div>
                 <div class="item">
                     <label for="">IP ứng dụng:</label>
                     <input type="text" class="input-modal" name="key">
                 </div>
                 <div class="item">
                     <label for="">Miêu tả ứng dụng:</label>
                     <input type="text" class="input-modal" name="description">
                 </div>

                 <div class="item">
                         <label for="">Trạng thái kích hoạt:</label>
                         <select id="single" class="form-control select2" name="status">
                                 <option value="1">Enable</option>
                                 <option value="0">Disable</option>
                             </select>
                     </div>
             </div>
             <div class="modal-footer">

                 <button type="submit" class="btn green"><i class="far fa-save"></i>Lưu</button>

             </div>
           </form>
         </div>

       </div>
    </div>
</div>
@endsection
