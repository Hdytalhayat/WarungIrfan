

<?php $__env->startSection('title'); ?>
    Warung Irfan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Categories</h2>
                <div class="owl-carousel owl-theme">
                        <?php $__currentLoopData = $trending_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <a href="<?php echo e(url('view-categories/'.$item->slug)); ?>">
                                <div class="card">
                                    <img src="<?php echo e(asset('assets/uploads/categories/'.$item->image)); ?>" alt="">
                                    <div class="card-body">
                                        <h5><?php echo e($item->name); ?></h5>
                                        <span class="float-start"><?php echo e($item->menu_price); ?></span>
                                        <span class="float-end"><s><?php echo e($item->original_price); ?></s></span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured menu</h2>
                <div class="owl-carousel owl-theme">
                        <?php $__currentLoopData = $featured_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <a href="<?php echo e(url('view-categories/'.$item->Categories->slug.'/'.$item->slug)); ?>">
                                <div class="card">
                                    <img src="<?php echo e(asset('assets/uploads/menu/'.$item->image)); ?>" alt="">
                                    <div class="card-body">
                                        <h5><?php echo e($item->name); ?></h5>
                                        <span class="float-start"><?php echo e($item->menu_price); ?></span>
                                        <span class="float-end"><s><?php echo e($item->original_price); ?></s></span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/index.blade.php ENDPATH**/ ?>