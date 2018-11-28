@extends('layouts.design')
@section('title','Admin dashboard - Bnet')
@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <div class="dashboard">

      <div class="menu-option">
        <div class="bs-row bs-row-sm15 bs-row-xs10">
          <div class="bs-col sm-33-15 xs-33-10">
            <div class="item">
              <div class="top">
                <a href="{{ url('admin/apponline')}}">
                <img class="default" src="{{ asset('bnet/images/icon1.gif') }}" alt="" />
                <img
                  class="hover"
                  src="{{ asset('bnet/images/icon1-hover.gif') }}"
                  alt=""
                />
                </a>
              </div>
              <div class="bottom"><p>ỨNG DỤNG ĐANG HOẠT ĐỘNG</p></div>
            </div>
          </div>
          <div class="bs-col sm-33-15 xs-33-10">
            <div class="item">
              <div class="top">
                <a href="{{ url('admin/useronline')}}">
                <img class="default" src="{{ asset('bnet/images/icon2.gif') }}" alt="" />
                <img
                  class="hover"
                  src="{{ asset('bnet/images/icon2-hover.gif') }}"
                  alt=""
                />
              </a>
              </div>
              <div class="bottom"><p>NGƯỜI DÙNG ĐANG HOẠT ĐỘNG</p></div>
            </div>
          </div>
          <div class="bs-col sm-33-15 xs-33-10">
            <div class="item">
              <div class="top">
                <img class="default" src="{{ asset('bnet/images/icon3.gif') }}" alt="" />
                <img
                  class="hover"
                  src="{{ asset('bnet/images/icon3-hover.gif') }}"
                  alt=""
                />
              </div>
              <div class="bottom"><p>QUẢN TRỊ VIÊN</p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="portlet box green1">
          <div class="portlet-title">
              <div class="caption">
                  <img src="{{ asset('bnet/images/ic3.gif') }}" alt=""> <span>BÁO CÁO HÀNG NGÀY</span> </div>
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
                              <th>Người dùng online</th>
                              <th>Ứng dụng sử dụng</th>
                              <th>Thời gian</th>
                              <th>Hành động</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Admin</td>
                              <td>Bnetagen</td>
                              <td></td>
                              <td></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <div class="portlet box green1 margin-page">
          <div class="portlet-title">
              <div class="caption">
                  <img src="images/ic3.gif" alt=""> <span>Biểu đồ</span> </div>

          </div>
          <div class="portlet-body">
              <div class="chart-content">
                  <div id="diagram-column"></div>
              </div>


          </div>
      </div>
      <div class="portlet box green1 margin-page">
          <div class="portlet-title">
              <div class="caption">
                  <img src="images/ic3.gif" alt=""> <span>Biểu đồ</span> </div>

          </div>
          <div class="portlet-body">
              <div class="chart-content">
                  <div id="diagram-line"></div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
