

<header class="header">
    <section class="navbarwarna fixed-top">
      <nav class="navbar navbar-expand-lg">
      <a href="/" class="logo"> &nbsp;Warung Makan</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav-menu ms-auto justify">
        <li class="nav-item"><a class="nav-link " href="#beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link " href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link " href="#kontak">Kontak</a></li>

        
            <?php if(auth()->guard()->guest()): ?>
                <?php if(Route::has('login')): ?>
                    <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('login')?'active':''); ?>" href="<?php echo e(url('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                
                <?php endif; ?>
            <?php else: ?>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?>

                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if(Auth::user()->status == '1'): ?>
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
    </nav>
    </section>
<!-- Akhir Navvbar -->




  </header><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>