

<?php $__env->startSection('title'); ?>
    Categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h2>All Categories</h2>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 mt-3">
                            <a href="<?php echo e(url('view-categories/'.$item->slug)); ?>">
                                <div class="card">
                                    <img src="<?php echo e(asset('assets/uploads/categories/'.$item->image)); ?>" alt="">
                                    <div class="card-body">
                                        <h5><?php echo e($item->name); ?></h5>
                                        <p>
                                            <?php echo e($item->description); ?>

                                        </p>
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/categories.blade.php ENDPATH**/ ?>