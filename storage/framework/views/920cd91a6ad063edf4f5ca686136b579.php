

<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
        <h6 class="mb-0">
            <a href="<?php echo e(url('/')); ?>">
                Home
            </a> / 
            <a href="<?php echo e(url('cart')); ?>">
                Cart
            </a> /
            <a href="<?php echo e(url('checkout')); ?>">
                Checkout
            </a>
        </h6>
        </div>
    </div>

    <div class="container mt-5">
        <form action="<?php echo e(url('order')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">First Name</label>
                                    <input value="<?php echo e(Auth::user()->name); ?>" name="fname" type="text" class="form-control fname" placeholder="Enter First Name">
                                    <span id="fname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input value="<?php echo e(Auth::user()->last_name); ?>" name="lname" type="text" class="form-control lname" placeholder="Enter Last Name">
                                    <span id="lname_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            
                            <?php if($cart_item->count() >0): ?>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name menu</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $total = 0;
                                        ?>
                                        <?php $__currentLoopData = $cart_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <tr>
                                            <td><?php echo e($item->menu->name); ?></td>
                                            <td><?php echo e($item->menu_qty); ?></td>
                                            <td>Rp.<?php echo e($item->menu->menu_price*$item->menu_qty); ?></td>
                                        </tr>
                                        <?php
                                        $total +=  $item->menu->menu_price*$item->menu_qty;                    
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <hr>
                                <h4 class="px-2">Grand Total : <span class="float-end">Rp.<?php echo e($total); ?></span> </h4>
                                <hr>
                                <button type="submit" class="btn btn-success w-100 float-end">COD</button>
                                <button type="button" class="btn btn-primary w-100 float-end mt-3 gopay">Pay with GoPay</button>
                                <button type="button" class="btn btn-primary w-100 float-end mt-3 gopay">Pay with Paypal</button>
                                
                            <?php else: ?>
                                <h5>No menu in here</h5>
                            <?php endif; ?>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>