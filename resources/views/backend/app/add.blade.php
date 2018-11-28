@extends('layouts.design')
@section('title','Thêm ứng dụng quyền truy cập')
@section('content')
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
