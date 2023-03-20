<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('/assets/img/sidebar-1.jpg') }}">
  <div class="logo"><a href="{{ url('/') }}" class="simple-text logo-normal">
      Warung Irfan
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard')?'active':''}}  ">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('categories')?'active':''}} ">
        <a class="nav-link" href="{{ url('categories') }}">
          <i class="material-icons">category</i>
          <p>Categories</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-categories')?'active':''}} ">
        <a class="nav-link" href="{{ url('add-categories') }}">
          <i class="material-icons">add</i>
          <p>Add Categories</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('menu')?'active':''}} ">
        <a class="nav-link" href="{{ url('menu') }}">
          <i class="material-icons">list</i>
          <p>menu</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-menu')?'active':''}} ">
        <a class="nav-link" href="{{ url('add-menu') }}">
          <i class="material-icons">add</i>
          <p>Add menu</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('orders-list')?'active':''}}">
        <a class="nav-link" href="{{ url('orders-list') }}">
          <i class="material-icons">content_paste</i>
          <p>Orders</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('users-list')?'active':''}}">
        <a class="nav-link" href="{{ url('users-list') }}">
          <i class="material-icons">person</i>
          <p>Users</p>
        </a>
      </li>
    </ul>
  </div>
</div>