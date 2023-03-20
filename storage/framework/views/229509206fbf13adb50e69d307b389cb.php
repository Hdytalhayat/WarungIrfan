

<?php $__env->startSection('title'); ?>
    My Cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-3 mb-4 shadow-sm bg-secondary border-top">
        <div class="container">
        <h6 class="mb-0">
            <a href="<?php echo e(url('/')); ?>">
                Home
            </a> / 
            <a href="<?php echo e(url('cart')); ?>">
                Cart
            </a>
        </h6>
        </div>
    </div>
    <div class="container my-5">
        <div class="card shadow cartitem">
            <?php if($cart_item ->count()>0): ?>
                <?php
                    $total = 0;
                ?>
                <?php $__currentLoopData = $cart_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body menu_data">
                    <div class="row ">
                        <div class="col-md-2 my-auto">
                            <img height="70px" width="70px" src="<?php echo e(asset('assets/uploads/menu/'.$item->menu->image)); ?>" alt="">
                        </div>
                        <div class="col-md-3 my-auto">
                            <h6><?php echo e($item->menu->name); ?></h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>Rp.<?php echo e($item->menu->menu_price); ?></h6>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="menu_id" value="<?php echo e($item->menu_id); ?>">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px">
                                <button class="input-group-text change-btn decrement-btn">-</button>
                                <input type="text" name="Quantity" class="form-control qty-input text-center" value="<?php echo e($item->menu_qty); ?>">
                                <button class="input-group-text change-btn increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-danger delete-cart"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>
                <?php
                    $total +=  $item->menu->menu_price * $item->menu_qty ;
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="card-footer">
                    <h5>Total Price : Rp.<?php echo e($total); ?> 
                        <a href="<?php echo e(url('checkout')); ?>" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                    </h5>
                </div>
            <?php else: ?>
                <div class="card-body text-center">
                    <h2>Your <i class="fa fa-shopping-cart"></i> cart is empty</h2>
                    <a href="<?php echo e(url('/view-categories')); ?>" class="btn btn-outline-primary float-end">Go to menu categories</a>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/cart.blade.php ENDPATH**/ ?>