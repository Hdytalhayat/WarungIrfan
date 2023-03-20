

<?php $__env->startSection('title'); ?>
    Edit Menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">/
                <div class="card-header">
                    <h4>Edit Menu</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('update-menu/'.$menu->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <select class="form-select">
                                    <option selected><?php echo e($menu->Categories->name); ?></option>
                                  </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="<?php echo e($menu->name); ?>" name='name'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" value="<?php echo e($menu->slug); ?>" name='slug'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" rows="3" class="form-control"><?php echo e($menu->small_description); ?></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control" ><?php echo e($menu->description); ?></textarea>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="">Price</label>
                                <input type="number" class="form-control" value="<?php echo e($menu->price); ?>" name='price'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" class="form-control" name='status' <?php echo e($menu->status == '1' ? 'checked':''); ?>>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Trending</label>
                                <input type="checkbox" class="form-control" name='trending' <?php echo e($menu->trending == '1' ? 'checked':''); ?>>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input class="form-control" name='meta_title' value="<?php echo e($menu->meta_title); ?>" >
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea class="form-control" rows="3" name='meta_description'><?php echo e($menu->meta_description); ?></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <textarea class="form-control" rows="3" name='meta_keywords'><?php echo e($menu->meta_keywords); ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <?php if($menu->image): ?>
                                <img class="cate-img"  src="<?php echo e(asset('assets/uploads/menu/'.$menu->image)); ?>" alt="menu Image">
                            <?php endif; ?>
                            </div>
                            <div class="col-md-12">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/admin/menu/edit.blade.php ENDPATH**/ ?>