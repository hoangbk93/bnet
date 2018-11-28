@extends('layouts.design')
@section('title','Công tac hộ tịch')
@section('content')
<!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="dashboard">

                    <div class="portlet box green1 margin-page">
                        <div class="portlet-title">
                            <div class="caption">
                                <img src="images/ic3.gif" alt=""> <span>BÁO CÁO CÔNG TÁC HỘ TỊCH</span> </div>
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
                                    <span>mô tả ứng dụng:</span>Thống kê dữ liệu của một ứng dụng theo thông tin chi tiết
                                </p>
                                <p class="desc">
                                    Chi tiết: Lựa chọn chi tiết để hiển thị thông tin cần thống kê
                                </p>
                            </div>
                            <form method="post" action="{{url('admin/congtachotich')}}"> {{ csrf_field() }}
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Chi tiết</th>
                                            <th>Giới tính</th>
                                            <th>Nhóm máu</th>
                                            <th>Dân tộc</th>
                                            <th>Tôn giáo</th>
                                            <th>Thông tin kết hôn</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Chọn chi tiết</td>
                                            <td><select id="gioitinh">
                                                <option value="1">Giới tính nam</option>
                                                <option value="2">Giới tính nữ</option>
                                                <option selected value="0">Không xác định</option>
                                            </select></td>
                                            <td><select id="nhommau">
                                              <option value="00" selected>Chưa có thông tin</option>
                                                <option value="01">A</option>
                                                <option value="02">B</option>
                                                <option  value="04">O</option>
                                                <option value="03"> AB</option>
                                            </select></td>
                                            <td><select id="dantoc">
                                                @foreach($dantocs as $dantoc)
                                                <option value="{{ $dantoc->Madantocid }}">{{ $dantoc->Tengoidantoc }}</option>
                                                @endforeach
                                            </select></td>
                                            <td><select id="tongiao">
                                                @foreach($tongiaos as $tongiao)
                                                <option value="{{ $tongiao->Matongiaoid }}">{{ $tongiao->Tengoitongiao }}</option>
                                                @endforeach
                                            </select></td>
                                            <td><select id="kethon">
                                                <option selected value="0">Chưa có thông tin</option>
                                                <option value="1">Chưa kết hôn</option>
                                                <option value="2">Đang có vợ/chồng</option>
                                                <option value="3">Đã ly hôn hoặc góa vợ/chồng</option>
                                            </select></td>
                                            <td><select id="trangthai">
                                                <option selected value="0">Chưa có thông tin</option>
                                                <option value="1">Đang sống</option>
                                                <option value="2">Đã chết</option>
                                                <option value="3">Đã mất tích</option>
                                            </select></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Xem kết quả</button>
                            <p>Tổng số lượng:<span>10000 công dân</spam></p>
                        </div>
                      </form>
                    </div>
                    <div class="portlet box margin-page">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">DANH SÁCH CHI TIẾT</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>STT</th>
                              <th>Tên công dân</th>
                              <th>Chứng minh thư</th>
                              <th>Ngày sinh</th>
                              <th>Quê quán</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                              <th>STT</th>
                              <th>Tên công dân</th>
                              <th>Chứng minh thư</th>
                              <th>Ngày sinh</th>
                              <th>Quê quán</th>
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




@endsection
