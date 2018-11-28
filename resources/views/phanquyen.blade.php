@extends('layouts.design')
@section('title','Phân quyền lên bnet - get api')

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
                           <a href="javascript:;" class="collapse" data-original-title="" title="">c </a>
                           <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                               title=""> </a>
                           <a href="javascript:;" class="reload" data-original-title="" title="">r </a>
                           <a href="javascript:;" class="remove" data-original-title="" title="">r </a>
                       </div>
                   </div>
                   <div class="portlet-body">
                       <div class="detail-app">
                           <h5 class="title">
                               Ứng dụng Bnet
                           </h5>
                           <p class="desc">
                               <span>mô tả ứng dụng:</span>
                               Quản trị phân quyền và gửi xác nhận quyền người dùng lên cơ sở dữ liệu dùng chung.
                           </p>
                           <p class="desc">
                               Chi tiết:
                           </p>
                       </div>
                      <!-- noi dung  -->
                      <form method="post" action="{{ url('admin/user/add') }}"> {{ csrf_field() }}
                      <div class="modal-body">
                          <div class="bs-row bs-row-sm15">
                              <div class="bs-col sm-50-15">
                                  <div class="item">
                                      <label for="">Tên user:</label>
                                      <input type="text" class="input-modal" name="name">
                                  </div>
                              </div>
                              <div class="bs-col sm-50-15">
                                  <div class="item">
                                      <label for="">Tên app:</label>
                                      <input type="text" class="input-modal" name="fullname">
                                  </div>
                              </div>
                          </div>
                          <div class="bs-row bs-row-sm15">
                              <div class="bs-col sm-50-15">
                                  <div class="item">
                                      <label for="">token:</label>
                                      <input type="text" class="input-modal" name="email">
                                  </div>
                              </div>
                              <div class="bs-col sm-50-15">
                                  <div class="item">
                                      <label for="">Mật khẩu:</label>
                                      <input type="text" class="input-modal" name="password">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" name="submit" class="btn green"><i class="far fa-save"></i> Gửi </button>
                      </div>
                    </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
<!-- END CONTENT -->
@endsection
