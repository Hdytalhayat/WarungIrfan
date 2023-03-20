

<?php $__env->startSection('title', $menu->name); ?>

<?php $__env->startSection('css'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link href="<?php echo e(asset('css/ecustom.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  </div>
    <div class="py-3 mb-4">
        <div class="container">
        <h6 class="mb-0"><a href="/mode">Beranda</a> / <a href="/view-categories">categories</a> / <a href="<?php echo e(url('view-categories/'.$menu->categories->slug)); ?>"><?php echo e($menu->categories->name); ?> </a>/ <a href="<?php echo e(url('categories/'.$menu->categories->slug.'/'.$menu->name)); ?>"><?php echo e($menu->name); ?></a></h6>
        </div>
    </div>

    <div class="container pb-5">
        <div class="card shadow ">
            <div class="card-body">
                <div class="row menu_data">
                    <div class="col-md-4 border-right">
                        <img src="<?php echo e(asset('assets/uploads/menu/'.$menu->image)); ?>" alt="menu..." class="w-100">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            <?php echo e($menu->name); ?>

                            <label style="font-size: 16px" class="float-end badge bg-danger trending_tag"><?php echo e($menu->trending == '1'?'Trending':''); ?></label>
                        </h2>
                        <hr>
                        <label style="font-weight: bold" class="me-3">menu Price : Rp. <?php echo e($menu->price); ?> </label>
                        <hr>
                        <?php
                            $avg = number_format($rating_avg)
                        ?>
                        <div class="rating">
                            <?php for($i=1;$i<=$avg;$i++): ?>
                                <i class="fa fa-star checked"></i>
                            <?php endfor; ?>
                            <?php for($j=$avg+1;$j<=5;$j++): ?>
                                <i class="fa fa-star"></i>
                            <?php endfor; ?>
                            <span>
                                <?php if($rating->count()==0): ?>
                                    not rated yet
                                <?php else: ?>
                                    <?php echo e($rating->count()); ?> Ratings
                                <?php endif; ?>
                                
                            </span>
                        </div>
                        <p class="mt-3">
                            <?php echo $menu->small_description; ?>

                        </p>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <input type="hidden" value="<?php echo e($menu->id); ?>" class="Serve_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width: 130px">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="Quantity" class="form-control qty-input text-center" width="100" value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                                    
                            </div>
                            <div class="col-md-9">
                                <br>
                                <button type="button" class="btn btn-danger me-3 float-start addwish">Add to wishlist <i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-success me-3 float-start addcart">Add to cart <i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <h3>Description</h3>
                        <p class="mt-3">
                            <?php echo $menu->description; ?>

                        </p>
                    </div>
                    
                    
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/frontend/menu/view.blade.php ENDPATH**/ ?>