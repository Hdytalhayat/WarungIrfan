

<?php $__env->startSection('title'); ?>
    My Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Order view
                            <a class="btn btn-primary btn-sm float-right" href="<?php echo e(url('orders')); ?>">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h6>Shipping Detail</h6>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border p-2"><?php echo e($orders->first_name); ?></div>
                                <label for="">Last Name</label>
                                <div class="border p-2"><?php echo e($orders->last_name); ?></div>
                            </div>
                            <div class="col-md-6">
                                <h6>Order Detail</h6>
                                <hr>
                                <table class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $orders->Orderitem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($item->menu->name); ?></td>
                                                <td><?php echo e($item->qty); ?></td>
                                                <td>Rp.<?php echo e($item->price); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('assets/uploads/menu/'.$item->menu->image)); ?>" width="50px" alt="Sevice image..">
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total : <span class="float-end">Rp.<?php echo e($orders->total_price); ?></span> </h4>
                                <div class="mt-5 px-2">
                                    <label for="">Order Status</label>
                                    <form action="<?php echo e(url('update-order/'.$orders->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <select name="order-status" id="" class="form-select">
                                            <option value="0" <?php echo e($orders->status == '0' ? 'selected':''); ?>>Pending</option>
                                            <option value="1" <?php echo e($orders->status == '1' ? 'selected':''); ?>>Completed</option>
                                            <option value="2" <?php echo e($orders->status == '2' ? 'selected':''); ?>>Delivering</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-3 float-end">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/admin/orders/view.blade.php ENDPATH**/ ?>