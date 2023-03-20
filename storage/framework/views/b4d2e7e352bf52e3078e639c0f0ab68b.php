

<?php $__env->startSection('title'); ?>
    Review
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                            <h5>You are writing a review for <?php echo e($review->menu->name); ?></h5>
                            <form action="<?php echo e(url('/update-review')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="hidden" name="review_id" value="<?php echo e($review->id); ?>">
                                <textarea name="user_review" rows="5" class="form-control" placeholder="Write a review here"><?php echo e($review->reviews); ?></textarea>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/reviews/edit.blade.php ENDPATH**/ ?>