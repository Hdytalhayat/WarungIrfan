

<?php $__env->startSection('title'); ?>
    menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="py-3 mb-4 shadow-sm bg-secondary border-top">
    <div class="container">
        <h6 class="mb-0"><a href="/view-categories">Categories</a> / <a href="<?php echo e(url('view-categories/'.$categories->slug)); ?>"><?php echo e($categories->name); ?> </a></h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2><?php echo e($categories->name); ?></h2>
                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <a href="<?php echo e(url('view-categories/'.$categories->slug.'/'.$item->slug)); ?>">
                                        <img src="<?php echo e(asset('assets/uploads/menu/'.$item->image)); ?>" class="w-100" alt="menu..">
                                        <div class="card-body">
                                            <h5><?php echo e($item->name); ?></h5>
                                            <span class="float-start"><?php echo e($item->menu_price); ?></span>
                                            <span class="float-end"><s><?php echo e($item->original_price); ?></s></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/menu/index.blade.php ENDPATH**/ ?>