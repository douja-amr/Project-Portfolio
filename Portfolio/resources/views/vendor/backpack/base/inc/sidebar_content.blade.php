<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<!-- <li class="nav-item">
  <a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="las la-laptop-code"></i> {{ trans('backpack::base.dashboard') }}</a>
</li>
<li class="nav-item"><a href="#about" class="nav-link"><i class="la la-info nav-icon"></i>About</a></li>
<li class="nav-item"><a href="#skills" class="nav-link"><i class="la la-mortar-board nav-icon"></i>Skills</a></li>
<li class="nav-item"><a href="#work" class="nav-link"><i class="la la-file-code-o nav-icon"></i>Work</a></li>
<li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link"><i class="la la-envelope-o nav-icon"></i>Contact</a></li> -->



<header>
      
        <nav>
          <div class="nav-brand">
            <a href="#">
              <img class=logo src="{{asset('img/logo-1.png')}}"  alt="khadija" />
            </a>
          </div>
          <div class="burger-menu-icon">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
          <ul class="nav-list">
            <li class="nav-item">
              <a href="{{ backpack_url('dashboard') }}">
                <img
                src="{{asset('img/kadi1.jpg')}}"
                  alt="khadija"
                  class="profile-pic nav-link"
                />
                <span class="caption nav-link">Khadija Amardoul</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#projects" class="nav-link">Projects</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </li>
            
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('skill') }}'> Skills</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('work') }}'> Project</a></li>
<li class='nav-item'><a class="dropdown-item nav-link" href="{{ backpack_url('logout') }}"><i class="la la-lock"></i> {{ trans('backpack::base.logout') }}</a></li>
          </ul>
        </nav>
      </div>
    </header>

<!-- Users, Roles Permissions -->
  @role('user')
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>
  @endrole


