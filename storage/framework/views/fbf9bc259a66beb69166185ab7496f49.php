

<?php $__env->startSection('title'); ?>
    My Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header text-white bg-secondary">
                        <h4>My Orders</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>order Date</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(date('d-m-y'. strtotime($item->created_at))); ?></td>
                                        <td><?php echo e($item->tracking_no); ?></td>
                                        <td>Rp.<?php echo e($item->total_price); ?></td>
                                        <td><?php echo e($item->status == '0' ? 'Pending' : 'Completed'); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('view-order/'.$item->id)); ?>" class="btn btn-primary">view</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/orders/index.blade.php ENDPATH**/ ?>