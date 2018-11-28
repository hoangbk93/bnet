
@extends('layouts.design')
@section('title','Quản trị taid khoản quản trị người dùng')
@section('content')
<?php use App\Application; ?>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="dashboard">

                    <div class="portlet box green1 margin-page">
                        <div class="portlet-title">
                            <div class="caption">
                                <img src="images/ic3.gif" alt=""> <span>DANH SÁCH USER</span> </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                                    title=""> </a>
                                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="add-title clearfix">
                                <div class="button-left">
                                  <a class="btn btn-primary" data-toggle="modal" href="{{url('admin/user/add')}}"><i class="fas fa-plus-circle"></i> Thêm mới</a>
                                </div>
                                <div class="search">
                                    <input type="text" placeholder="Tìm kiếm...">
                                    <button class="icon"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>TÊN USER</th>
                                            <th>HỌ TÊN</th>
                                            <th>ĐƠN VỊ</th>
                                            <th>PHÂN QUYỀN</th>
                                            <th>ACTIVE</th>
                                            <th>SỬA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($items as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->fullname}}</td>
                                            <td>{{Application::where('id',$user->id_app)->first()->name}}</td>
                                            <td>{{$user->level}}</td>
                                            <td><a><i class="fas fa-user-check"></i></a></td>
                                            <td><a id="edit-user" class="btn btn-outline sbold" data-toggle="modal" href="#large"
                                                    ><i class="far fa-edit"></i></a><a id="edit-user" onclick="return confirm('you are sure delete user?')" class="btn btn-outline sbold" data-toggle="modal" href="{{url('admin/user/delete/'.$user->id)}}"
                                                            ><i class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-modal-lg modal-user" id="large" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Chỉnh sửa / thêm user</h4>
                    </div>
                    <!-- FORM add  -->

                    <div class="modal-body">
                        <div class="bs-row bs-row-sm15">
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Tên user:</label>
                                    <input type="text" class="input-modal" id="user-name">
                                </div>
                            </div>
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Họ tên:</label>
                                    <input type="text" class="input-modal" id="user-fullname">
                                </div>
                            </div>
                        </div>
                        <div class="bs-row bs-row-sm15">
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Email:</label>
                                    <input type="text" class="input-modal" id="user-email">
                                </div>
                            </div>
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Mật khẩu:</label>
                                    <input type="text" class="input-modal" id="user-password">
                                </div>
                            </div>
                        </div>

                        <div class="bs-row bs-row-sm15">
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Đơn vị:</label>
                                    <input type="text" class="input-modal" id="user-unit">
                                </div>
                            </div>
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Trạng thái:</label>
                                    <select id="single" class="form-control select2" name="status" id="user-status">
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="bs-row bs-row-sm15">
                            <div class="bs-col sm-50-15">
                                <div class="item">
                                    <label for="">Quyền phân quyền:</label>
                                    <select id="single" class="form-control select2" id="user-level">
                                        <option>Select level</option>
                                        <option value="1">Cong dan</option>
                                        <option value="2">Truong phong</option>
                                        <option value="3">Nha nuoc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="bs-col sm-50-15">

                            </div>
                        </div>
                        <div class="option">
                            <div class="bs-row">
                                <div class="bs-col xs-25 tn-50">
                                        <div class="form-group form-md-checkboxes">
                                                <label>Chức năng 1</label>
                                                <div class="md-checkbox-inline">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox6" class="md-check">
                                                        <label for="checkbox6">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 1 </label>
                                                    </div>
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox7" class="md-check" checked>
                                                        <label for="checkbox7">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 2 </label>
                                                    </div>

                                                </div>
                                            </div>
                                </div>
                                <div class="bs-col xs-25 tn-50">
                                        <div class="form-group form-md-checkboxes">
                                                <label>Chức năng 1</label>
                                                <div class="md-checkbox-inline">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox8" class="md-check">
                                                        <label for="checkbox8">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 1 </label>
                                                    </div>
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox9" class="md-check" checked>
                                                        <label for="checkbox9">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 2 </label>
                                                    </div>

                                                </div>
                                            </div>
                                </div>
                                <div class="bs-col xs-25 tn-50">
                                        <div class="form-group form-md-checkboxes">
                                                <label>Chức năng 1</label>
                                                <div class="md-checkbox-inline">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox10" class="md-check">
                                                        <label for="checkbox10">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 1 </label>
                                                    </div>
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox11" class="md-check" checked>
                                                        <label for="checkbox11">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 2 </label>
                                                    </div>

                                                </div>
                                            </div>
                                </div>
                                <div class="bs-col xs-25 tn-50">
                                        <div class="form-group form-md-checkboxes">
                                                <label>Chức năng 1</label>
                                                <div class="md-checkbox-inline">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox12" class="md-check">
                                                        <label for="checkbox12">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 1 </label>
                                                    </div>
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox13" class="md-check" checked>
                                                        <label for="checkbox13">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Option 2 </label>
                                                    </div>

                                                </div>
                                            </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">

                        <button id="btn-add-user" type="button" class="btn green"><i class="far fa-save"></i>Lưu</button>
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal"><i class="fas fa-times"></i>Đóng</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
@endsection
