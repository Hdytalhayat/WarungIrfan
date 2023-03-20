

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Dashboard</h1>
                </div>
                <div class="card body">
                    <div class="row mx-3">
                        <div class="col-md-4">
                            <div class="rounded border p-2 mb-2 bg-danger font-weight-bold">Total Categories : <?php echo e($categories); ?></div>
                            <div class="rounded border p-2 mb-2 bg-info font-weight-bold">Total menus : <?php echo e($menu); ?></div>
                        </div>   
                        <div class="col-md-4">
                            <div class="rounded border p-2 mb-2 bg-primary font-weight-bold">Pending Orders : <?php echo e($pending); ?></div>
                            <div class="rounded border p-2 mb-2 bg-success font-weight-bold">Completed Orders : <?php echo e($complete); ?></div>
                        </div>
                        <div class="col-md-4">
                            <div class="rounded border p-2 mb-2 bg-secondary font-weight-bold">Total User : <?php echo e($users); ?></div>
                            <?php
                                $avg = number_format($rating_avg)
                            ?>
                            <div class="rounded border p-2 mb-2 bg-warning font-weight-bold">Rating : <?php echo e($avg); ?>.0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/admin/index.blade.php ENDPATH**/ ?>