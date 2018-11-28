@extends('layouts.design')
@section('title','Thêm tài khoản quản trị')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="dashboard">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Chỉnh sửa / thêm user</h4>
                </div>
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
                                <label for="">Họ tên:</label>
                                <input type="text" class="input-modal" name="fullname">
                            </div>
                        </div>
                    </div>
                    <div class="bs-row bs-row-sm15">
                        <div class="bs-col sm-50-15">
                            <div class="item">
                                <label for="">Email:</label>
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
                    <div class="bs-row bs-row-sm15">
                        <div class="bs-col sm-50-15">
                            <div class="item">
                                <label for="">Số điện thoại:</label>
                                <input type="text" class="input-modal" name="phone">
                            </div>
                        </div>
                        <div class="bs-col sm-50-15">
                            <div class="item">
                                <label for="">Ứng dụng:</label>
                                <select id="single" class="form-control select2" name="idapp">
                                  @foreach($apps as $app)
                                    <option value="{{$app->id}}">{{$app->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="bs-row bs-row-sm15">
                        <div class="bs-col sm-50-15">
                            <div class="item">
                                <label for="">Trạng thái:</label>
                                <select id="single" class="form-control select2" name="status">
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                </select>
                            </div>
                        </div>
                        <div class="bs-col sm-50-15">
                            <div class="item">
                                <label for="">Quyền phân quyền:</label>
                                <select id="single" class="form-control select2" name="level">
                                    @foreach($rights as $right)
                                    <option value="{{$right->id}}">{{$right->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn green"><i class="far fa-save"></i>Lưu</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
