

<?php $__env->startSection('title'); ?>
    QR Code
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="py-3 mb-4 shadow-sm bg-secondary border-top">
    <div class="container">
    <h6 class="mb-0"><a href="/view-categories">Categories</a> / <a href="<?php echo e(url('view-categories/'.$menu->categories->slug)); ?>"><?php echo e($menu->categories->name); ?> </a>/ <a href="<?php echo e(url('view-categories/'.$menu->categories->slug.'/'.$menu->name)); ?>"><?php echo e($menu->name); ?></a> / <a href="<?php echo e(url('qrcode/'.$menu->id)); ?>">QR Code</a></h6>
    </div>
</div>

    <div class="container pb-5">
        <div class="card shadow ">
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <img src="<?php echo e(asset('assets/uploads/qr/'.$menu->qrcode)); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/qrcode.blade.php ENDPATH**/ ?>