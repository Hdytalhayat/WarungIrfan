

<?php $__env->startSection('title'); ?>
    Menu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Menu</h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->Categories->name); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->price); ?></td>
                                <td>
                                    <img class="cate-img" src="<?php echo e(asset('assets/uploads/menu/'.$item->image)); ?>" alt="image here..">    
                                </td>
                                <td>
                                    <a href="<?php echo e(url('edit-menu/'.$item->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo e(url('delete-menu/'.$item->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/admin/menu/index.blade.php ENDPATH**/ ?>