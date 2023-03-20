<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $__env->yieldContent('title'); ?> </title>
    

    <!-- Styles -->

    <link href="<?php echo e(asset('frontend/css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <!-- roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <!-- awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none !important;
            color: black;
        }
    </style>
</head>
<body>
        <?php echo $__env->make('layouts.src.frontnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class="wa-chat">
            <a href="" target="_blank">QUIZ
            </a>
        </div>

        
    
    <!-- Scripts -->
    
    <!--<script src="{ asset('frontend/js/bootstrap.min.js')  }}" defer></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('frontend/js/custom.js')); ?>" defer></script>
    <script src="<?php echo e(asset('frontend/js/checkout.js')); ?>" defer></script>

    <script src="owlcarousel/owl.carousel.min.js"></script>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>

          var availableTags = [];
            $.ajax({
                method: "GET",
                url: "/menu-list",
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
<?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>