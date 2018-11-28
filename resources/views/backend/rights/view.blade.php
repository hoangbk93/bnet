@extends('layouts.design')
@section('title','Quản trị ứng dụng quyền truy cập')
@section('content')
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="dashboard">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm quyền người dùng</h4>
                        </div>

                        <div class="modal-body">
                            <div class="bs-row bs-row-sm15">
                                <div class="bs-col sm-40-15">
                                  <form method="post" action="{{ url('admin/quyen-nguoi-dung/add') }}"> {{ csrf_field() }}
                                    <div class="item">
                                        <label for="">Tên Quyền:</label>
                                        <input type="text" class="input-modal" name="name">
                                    </div>
                                    <div class="item">
                                        <label for="">Trạng thái:</label>
                                        <select class="form-control select2" name="status">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn green"><i class="far fa-save"></i>Thêm mới</button>
                                    </div>
                                </form>
                                </div>
                                <div class="bs-col sm-60-15">
                                  <div class="portlet box green1 margin-page">
                                      <div class="portlet-title">
                                          <div class="caption">
                                              <img src="images/ic3.gif" alt=""> <span>DANH SÁCH ỨNG DỤNG</span> </div>
                                      </div>
                                      <div class="portlet-body">
                                          <div class="table-scrollable">
                                              <table class="table table-bordered table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>STT</th>
                                                          <th>TÊN QUYỀN</th>
                                                          <th>TRẠNG THÁi</th>
                                                          <th>HÀNH ĐỘNG</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach($items as $info)
                                                      <tr>
                                                          <td>{{$info->id}}</td>
                                                          <td>{{$info->name}}</td>
                                                          <td>{{$info->status}}</td>

                                                          <td><a id="edit-user" class="btn btn-outline sbold" data-toggle="modal" href="#large"
                                                                  ><i class="far fa-edit"></i></a><a id="edit-user" class="btn btn-outline sbold" data-toggle="modal" onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="{{url('admin/quyen-nguoi-dung/delete/'.$info->id)}}"
                                                                          ><i class="far fa fa-trash-alt"></i></a></td>
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
                </div>
            </div>
        </div>


        @endsection
