

<?php $__env->startSection('title'); ?>
    Edit categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit categories</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('update-categories/'.$categories->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input value="<?php echo e($categories->name); ?>" type="text" class="form-control" name='name'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input value="<?php echo e($categories->slug); ?>" type="text" class="form-control" name='slug'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control"><?php echo e($categories->description); ?></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input <?php echo e($categories->status = '1' ? 'checked':''); ?> type="checkbox" class="form-control" name='status'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Popular</label>
                                <input <?php echo e($categories->popular = '1' ? 'checked':''); ?> type="checkbox" class="form-control" name='popular'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input value="<?php echo e($categories->meta_title); ?>" class="form-control" name='meta_title'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea class="form-control" rows="3" name='meta_description'><?php echo e($categories->meta_descrip); ?></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea class="form-control" rows="3" name='meta_keywords'><?php echo e($categories->meta_keywords); ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <?php if($categories->image): ?>
                                    <img class="cate-img" src="<?php echo e(asset('assets/uploads/categories/'.$categories->image)); ?>" alt="categories Image">
                                <?php endif; ?>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="image" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>