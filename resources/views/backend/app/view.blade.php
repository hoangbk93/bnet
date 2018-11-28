@extends('layouts.design')
@section('title','Quản trị ứng dụng quyền truy cập')
@section('content')
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="dashboard">

                    <div class="portlet box green1 margin-page">
                        <div class="portlet-title">
                            <div class="caption">
                                <img src="images/ic3.gif" alt=""> <span>DANH SÁCH ỨNG DỤNG</span> </div>
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
                                    <a  data-toggle="modal" href="{{ url('admin/app/add') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Thêm mới</a>
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
                                            <th>TÊN ỨNG DỤNG</th>
                                            <th>IP ỨNG DỤNG</th>
                                            <th>USER CHO ỨNG DỤNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>TÀI NGUYÊN TRUY CẬP</th>
                                            <th>ACTIVE</th>
                                            <th>SỬA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($app as $info)
                                        <tr>
                                            <td>{{$info->id}}</td>
                                            <td>{{$info->name}}</td>
                                            <td>{{$info->key}}</td>
                                            <td>{{$info->description}}</td>
                                            <td>{{$info->status}}</td>
                                            <td>Công dân</td>
                                            <td><a><i class="fas fa-user-check"></i></a></td>
                                            <td><a id="edit-user" class="btn btn-outline sbold" data-toggle="modal" href="#large"
                                                    ><i class="far fa-edit"></i></a></td>
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
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Chỉnh sửa / thêm ứng dụng</h4>
                        </div>
                        <div class="modal-body">
                            <div class="item">
                                <label for="">Tên ứng dụng:</label>
                                <input type="text" class="input-modal">
                            </div>
                            <div class="item">
                                <label for="">IP ứng dụng:</label>
                                <input type="text" class="input-modal">
                            </div>
                            <div class="item">
                                <label for="">User cho ứng dụng:</label>
                                <input type="text" class="input-modal">
                            </div>
                            <div class="item">
                                <label for="">Mật khẩu:</label>
                                <input type="text" class="input-modal">
                            </div>
                            <div class="item">
                                    <label for="">Tài nguyên truy cập:</label>
                                    <select id="single" class="form-control select2">
                                            <option>Trạng thái 1</option>
                                            <option>Trạng thái 2</option>
                                            <option>Trạng thái 3</option>
                                        </select>
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

                            <button type="button" class="btn green"><i class="far fa-save"></i>Lưu</button>
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal"><i class="fas fa-times"></i>Đóng</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        @endsection
