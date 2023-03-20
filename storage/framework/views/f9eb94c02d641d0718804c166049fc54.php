

<?php $__env->startSection('title'); ?>
    Add categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add categories</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('insert-categories')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name='name'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name='slug'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input class="form-control" name='meta_title'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea class="form-control" rows="3" name='meta_description'></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea class="form-control" rows="3" name='meta_keywords'></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="image" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/admin/categories/add.blade.php ENDPATH**/ ?>