

<?php $__env->startSection('title'); ?>
    Review
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php if($verified_purchase->count() >0): ?>
                            <h5>You are writing a review for <?php echo e($menu->name); ?></h5>
                            <form action="<?php echo e(url('review')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="menu_id" value="<?php echo e($menu->id); ?>">
                                <textarea name="user_review" rows="5" class="form-control" placeholder="Write a review here"></textarea>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                <h5>You are not eligible to review this menu</h5>
                                <p>
                                    only customers who ordered can review
                                </p>
                                <a href="<?php echo e(url('/')); ?>" class="btn btn-primary mt-3">Back to homepage</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/reviews/index.blade.php ENDPATH**/ ?>