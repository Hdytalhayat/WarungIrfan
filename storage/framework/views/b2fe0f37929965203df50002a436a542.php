<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
    </div>
    
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" >
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              <div class="dropdown-devide"></div>
              <a class="dropdown-item" href="<?php echo e(url('/')); ?>">
              <?php echo e(__('Home')); ?>

              </a> 
              <div class="dropdown-devide"></div>
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <?php echo e(__('Logout')); ?>

              </a> 
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
          </div>
        </li>
        
      </ul>
    </div>
  </div>
</nav><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/layouts/src/adminnav.blade.php ENDPATH**/ ?>