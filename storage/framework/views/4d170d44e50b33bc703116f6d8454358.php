<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Warung Irfan - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        a{
            text-decoration: none !important;
            color: black;
        }
    </style>

    <!-- Style -->
    <?php echo $__env->yieldContent('css'); ?>
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/jquery.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>" defer></script>

    

</head>
<body>
    <?php echo $__env->yieldContent('navbar'); ?>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
 <!-- Scripts -->
    
    <!--<script src="{ asset('frontend/js/bootstrap.min.js')  }}" defer></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/jquery.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/checkout.js')); ?>" defer></script>

    

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>

          var availableTags = [];
            $.ajax({
                method: "GET",
                url: "/service-list",
                success: function (response) {
                    start_autocomplete(response);
                }
            });
          function start_autocomplete(availableTags){
            $( "#search_serve" ).autocomplete({
                source: availableTags
            });
          }
          

          
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>
        <script>
            swal("<?php echo e(session('status')); ?>");
        </script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>