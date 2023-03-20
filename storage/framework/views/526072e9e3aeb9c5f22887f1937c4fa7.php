

<?php $__env->startSection('title'); ?>
    Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h1>User Details
                        <a href="<?php echo e(url('users-list')); ?>" class="btn btn-primary btn-sm float-right">Back</a>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Role</label>
                            <div class="p-2 border">
                                <form action="<?php echo e(url('change-role/'.$users->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e($users->status == '0'?'Customer':'Admin'); ?>

                                    <input name="status" type="text" value="<?php echo e($users->status == '0'?'1':'0'); ?>" hidden>
                                    &emsp;&emsp;<button class="btn btn-primary" type="submit">change</button>
                                </form>
                            </div>
                            
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">First Name</label>
                            <div class="p-2 border"><?php echo e($users->name); ?></div>
                        </div> 
                        <div class="col-md-4 mt-3">
                            <label for="">Last Name</label>
                            <div class="p-2 border"><?php echo e($users->last_name); ?></div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border"><?php echo e($users->email); ?></div>

                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Phone Number</label>
                            <div class="p-2 border"><?php echo e($users->phone); ?></div>

                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Address</label>
                            <div class="p-2 border"><?php echo e($users->address); ?></div>

                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">District/City</label>
                            <div class="p-2 border"><?php echo e($users->city); ?></div>

                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Province</label>
                            <div class="p-2 border"><?php echo e($users->province); ?></div>

                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Postal Code</label>
                            <div class="p-2"><?php echo e($users->postal); ?></div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/admin/users/view.blade.php ENDPATH**/ ?>