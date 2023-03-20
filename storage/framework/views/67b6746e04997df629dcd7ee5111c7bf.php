

<?php $__env->startSection('title'); ?>
    My Wishlist
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-3 mb-4 shadow-sm bg-secondary border-top">
        <div class="container">
        <h6 class="mb-0">
            <a href="<?php echo e(url('/')); ?>">
                Home
            </a> / 
            <a href="<?php echo e(url('wishlist')); ?>">
                Favorite
            </a>
        </h6>
        </div>
    </div>
    <div class="container my-5">
        <div class="card shadow wishitem">
            <div class="card-body">
                <?php if($wishlist->count() >0): ?>
                    <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body menu_data">
                        <div class="row ">
                            <div class="col-md-2 my-auto">
                                <img height="70px" width="70px" src="<?php echo e(asset('assets/uploads/menu/'.$item->menu->image)); ?>" alt="">
                            </div>
                            <div class="col-md-3 my-auto">
                                <h6><?php echo e($item->menu->name); ?></h6>
                            </div>
                            <div class="col-md-3 my-auto">
                                <input type="hidden" class="menu_id" value="<?php echo e($item->menu_id); ?>">
                                <div class="input-group text-center mb-3" style="width: 130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="Quantity" class="form-control qty-input text-center" value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-success addcart"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger delete-wishlist"><i class="fa fa-trash"></i> Delete</button>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h4>There are not menu in your wishlist</h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/wishlist.blade.php ENDPATH**/ ?>