<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Warung Irfan</a>
      <div class="search-bar">
        <form action="<?php echo e(url('searh-menu')); ?>" method="POST">
          <?php echo csrf_field(); ?>
        <div class="input-group">
          <input name="serve_name" id="search_serve" type="search" class="form-control" placeholder="Search" required >
          <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
        </div>
      </form>
      </div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('/')?'active':''); ?> " href="<?php echo e(url('/')); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('view-categories')?'active':''); ?>" href="<?php echo e(url('view-categories')); ?>">Categories</a>
          </li>
          

          <?php if(auth()->guard()->guest()): ?>
              <?php if(Route::has('login')): ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('login')?'active':''); ?>" href="<?php echo e(url('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                
              <?php endif; ?>
              <?php if(Route::has('register')): ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('register')?'active':''); ?>" href="<?php echo e(url('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
              <?php endif; ?>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('cart')?'active':''); ?>" href="<?php echo e(url('cart')); ?>">
              Cart
              <span class="badge badge-pill bg-success cart-count">0</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('wishlist')?'active':''); ?>" href="<?php echo e(url('wishlist')); ?>">
              Favorite
              <span class="badge badge-pill bg-danger wishlist-count">0</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo e(Auth::user()->name); ?>

            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if(Auth::user()->role_as == '1'): ?>
              <li>
                <a href="<?php echo e(url('/dashboard')); ?>" class="dropdown-item">My Dashboard</a>
              </li>  
              <?php endif; ?>
              <li>
                <a href="<?php echo e(url('my-order')); ?>" class="dropdown-item">My Orders</a>
              </li>
              <li>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><?php echo e(__('Logout')); ?></a>
                <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form" class="d-none"><?php echo csrf_field(); ?></form>
              </li>
            </ul>
          </li>
          
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/layouts/src/frontnav.blade.php ENDPATH**/ ?>