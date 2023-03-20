<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Dashboard <?php echo $__env->yieldContent('title'); ?> </title>


    <!-- Styles -->
    <link href="<?php echo e(asset('admin/css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/material-dashboard.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  

</head>
<body>
    <div class="wrapper ">
        <?php echo $__env->make('layouts.src.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->make('layouts.src.adminnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <?php echo $__env->make('layouts.src.adminfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
           
        </div>
    </div>
    
    <!-- Scripts -->
    <!--<script src="{ asset('frontend/js/bootstrap.min.js')  }}" defer></script>-->
    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/bootstrap-material-design.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/perfect-scrollbar.jquery.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('admin/js/sweetalert.js')); ?>" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>
        <script>
            swal("<?php echo e(session('status')); ?>");
        </script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/layouts/admin.blade.php ENDPATH**/ ?>