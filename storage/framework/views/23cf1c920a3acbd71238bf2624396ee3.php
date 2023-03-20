<div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo e(asset('/assets/img/sidebar-1.jpg')); ?>">
  <div class="logo"><a href="<?php echo e(url('/')); ?>" class="simple-text logo-normal">
      Warung Irfan
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item <?php echo e(Request::is('dashboard')?'active':''); ?>  ">
        <a class="nav-link" href="<?php echo e(url('dashboard')); ?>">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item <?php echo e(Request::is('categories')?'active':''); ?> ">
        <a class="nav-link" href="<?php echo e(url('categories')); ?>">
          <i class="material-icons">category</i>
          <p>Categories</p>
        </a>
      </li>
      <li class="nav-item <?php echo e(Request::is('add-categories')?'active':''); ?> ">
        <a class="nav-link" href="<?php echo e(url('add-categories')); ?>">
          <i class="material-icons">add</i>
          <p>Add Categories</p>
        </a>
      </li>
      <li class="nav-item <?php echo e(Request::is('menu')?'active':''); ?> ">
        <a class="nav-link" href="<?php echo e(url('menu')); ?>">
          <i class="material-icons">list</i>
          <p>menu</p>
        </a>
      </li>
      <li class="nav-item <?php echo e(Request::is('add-menu')?'active':''); ?> ">
        <a class="nav-link" href="<?php echo e(url('add-menu')); ?>">
          <i class="material-icons">add</i>
          <p>Add menu</p>
        </a>
      </li>
      <li class="nav-item <?php echo e(Request::is('orders-list')?'active':''); ?>">
        <a class="nav-link" href="<?php echo e(url('orders-list')); ?>">
          <i class="material-icons">content_paste</i>
          <p>Orders</p>
        </a>
      </li>
      <li class="nav-item <?php echo e(Request::is('users-list')?'active':''); ?>">
        <a class="nav-link" href="<?php echo e(url('users-list')); ?>">
          <i class="material-icons">person</i>
          <p>Users</p>
        </a>
      </li>
    </ul>
  </div>
</div><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/layouts/src/sidebar.blade.php ENDPATH**/ ?>