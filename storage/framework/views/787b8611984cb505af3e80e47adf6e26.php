

<?php $__env->startSection('title'); ?>
    Add menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">/
                <div class="card-header">
                    <h4>Add menu</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('insert-menu')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <select class="form-select" name="cate_id">
                                    <option selected>Select a Categories</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name='name'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name='slug'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">Original Price</label>
                                <input type="number" class="form-control" name='original_price'>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">menu Price</label>
                                <input type="number" class="form-control" name='menu_price'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" class="form-control" name='status'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Promo</label>
                                <input type="checkbox" class="form-control" name='trending'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea class="form-control" rows="3" name='meta_keywords'></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="">QR Code</label>
                                <input type="file" name="qrcode" class="form-control">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/admin/menu/add.blade.php ENDPATH**/ ?>