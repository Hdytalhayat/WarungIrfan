

<?php $__env->startSection('title'); ?>
    categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link href="<?php echo e(asset('css/ecustom.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="py-3 mb-4">
    <div class="container">
        <h6 class="mb-0"><a href="/mode">Beranda</a> / <a href="/view-categories">categories</a></h6>
    </div>
</div>
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/frontend/categories.blade.php ENDPATH**/ ?>