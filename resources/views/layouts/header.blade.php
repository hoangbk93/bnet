<!-- BEGIN HEADER -->
<div class="page-header navbar">
    <div class="logo-mobile">
        <img src="{{ asset('bnet/images/logo-mobile.gif') }}" alt="">
    </div>
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner ">
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a
      href="javascript:;"
      class="menu-toggler responsive-toggler"
      data-toggle="collapse"
      data-target=".navbar-collapse"
    >
      <span><i class="fas fa-bars"></i></span>
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">
        <li class="dropdown">
          <a href="{{url('dashboard')}}" class="dropdown-toggle">
            <i class="fab fa-elementor"></i>Trang chủ
          </a>
        </li>
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!--
          DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte
        -->
        <li
          class="dropdown dropdown-extended dropdown-notification"
          id="header_notification_bar"
        >
          <a
            href="javascript:;"
            class="dropdown-toggle"
            data-toggle="dropdown"
            data-hover="dropdown"
            data-close-others="true"
          >
          <i class="fas fa-bell"></i> Thông báo
            <span class="badge badge-default"> 1 </span>
          </a>
          <ul class="dropdown-menu">
            <li class="external">
              <h3><span class="bold">1 pending</span> notifications</h3>
              <a href="page_user_profile_1.html">view all</a>
            </li>
            <li>
              <ul
                class="dropdown-menu-list scroller"
                style="height: 250px;"
                data-handle-color="#637283"
              >
                <li>
                  <a href="javascript:;">
                    <span class="time">just now</span>
                    <span class="details">
                      <span
                        class="label label-sm label-icon label-success"
                      >
                      </span>
                      New user registered.
                    </span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown dropdown-user">
          <a
            href="javascript:;"
            class="dropdown-toggle"
            data-toggle="dropdown"
            data-hover="dropdown"
            data-close-others="true"
          >
            <i class="fas fa-user"></i> @if(isset(Auth::user()->name)) {{ Auth::user()->name }} @endif
          </a>
        </li>

        <li class="dropdown">
          <a href="{{ route('logout') }}" class="dropdown-toggle" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Thoát
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
        <!-- END QUICK SIDEBAR TOGGLER -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
