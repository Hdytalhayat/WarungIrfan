<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $__env->yieldContent('title'); ?> </title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/custom.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">E-menuz</a>
              
              
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
                      Wishlist
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
          </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/layouts/app.blade.php ENDPATH**/ ?>