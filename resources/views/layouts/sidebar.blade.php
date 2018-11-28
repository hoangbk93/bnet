
<div class="page-sidebar-wrapper">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar navbar-collapse collapse" id="main-left">
    <!-- BEGIN SIDEBAR MENU -->
    <div class="page-logo">
      <a href="{{url('/dashboard')}}">
        <img src="{{ asset('bnet/images/logo.gif') }}" alt="logo" class="logo-default" />
      </a>
    </div>
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
    data-slide-speed="200" style="padding-top: 20px">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
      <div class="sidebar-toggler"><span></span></div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <li class="nav-item ">
      <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-diamond"></i>
        <span class="title">Quản lí user</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub-menu">
        <li class="nav-item  ">
          <a href="{{url('admin/user/view')}}" class="nav-link ">
            <span class="title">Quản lí user</span>
          </a>
        </li>
        <li class="nav-item  ">
          <a href="{{url('phanquyen')}}" class="nav-link ">
            <span class="title">Phan quyen</span>
          </a>
        </li>
        <li class="nav-item  ">
          <a href="{{url('admin/quyen-nguoi-dung/view')}}" class="nav-link ">
            <span class="title">Quyền người dùng</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item  ">
      <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-puzzle"></i>
        <span class="title">Quản lí ứng dụng</span>
        <span class="arrow"></span>
      </a>
      <ul class="sub-menu">
        <li class="nav-item  ">
          <a href="{{url('admin/app/view')}}" class="nav-link ">
            <span class="title">Danh sách ứng dụng</span>
          </a>
        </li>
        <li class="nav-item  ">
          <a href="{{url('admin/transation')}}" class="nav-link ">
            <span class="title">Giao dịch</span>
            <span class="badge badge-danger">2</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item  ">
      <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-puzzle1"></i>
        <span class="title">Báo cáo</span> <span class="arrow"></span>
      </a>
      <ul class="sub-menu">
        <li class="nav-item  ">
          <a href="{{url('admin/report')}}" class="nav-link ">
            <span class="title">Báo cáo</span>
            <span class="badge badge-danger">2</span>
          </a>
        </li>
        <li class="nav-item  ">
          <a href="{{url('admin/congtachotich')}}" class="nav-link ">
            <span class="title">Công tác hộ tịch</span>
          </a>
        </li>
        <li class="nav-item  ">
          <a href="{{url('/admin/chitietdientu')}}" class="nav-link ">
            <span class="title">Chi tiết điện tử</span>

          </a>
        </li>
      </ul>
    </li>
    <!-- admin  -->
    <li class="nav-item  ">
      <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-diamond"></i>
        <span class="title">Admintrator</span> <span class="arrow"></span>
      </a>
      <ul class="sub-menu">
        <li class="nav-item  ">
          <a href="{{url('admin/admin/view')}}" class="nav-link ">
            <span class="title">Admin</span>
          </a>
        </li>
        <li class="nav-item  ">
          <a href="{{url('admin/admin/add')}}" class="nav-link ">
            <span class="title">Add Admin</span>
          </a>
        </li>
      </ul>
    </li>
  <!-- end admin -->
  </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
  </div>
  <!-- END SIDEBAR -->
</div>
