

<?php $__env->startSection('title', $menu->name); ?>

<?php $__env->startSection('content'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo e(url('rating')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="menu_id" value="<?php echo e($menu->id); ?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rate <?php echo e($menu->name); ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    <?php if($user_rating): ?>
                        <?php for($i=1;$i<=$user_rating->stars;$i++): ?>
                            <input type="radio" value="<?php echo e($i); ?>" name="menu_rating" checked id="rating<?php echo e($i); ?>">
                            <label for="rating<?php echo e($i); ?>" class="fa fa-star"></label>
                        <?php endfor; ?>
                        <?php for($j=$user_rating->stars+1;$j<=5;$j++): ?>
                            <input type="radio" value="<?php echo e($j); ?>" name="menu_rating" id="rating<?php echo e($j); ?>">
                            <label for="rating<?php echo e($j); ?>" class="fa fa-star"></label>
                        <?php endfor; ?>
                    <?php else: ?>
                    
                        <input type="radio" value="1" name="menu_rating" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="menu_rating" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="menu_rating" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="menu_rating" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="menu_rating" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    <?php endif; ?>
                    
                </div>        
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Submit</button>
        </div>
        </form>
        


      </div>
    </div>
  </div>
    <div class="py-3 mb-4 shadow-sm bg-secondary border-top">
        <div class="container">
        <h6 class="mb-0"><a href="/view-categories">Categories</a> / <a href="<?php echo e(url('view-categories/'.$menu->categories->slug)); ?>"><?php echo e($menu->categories->name); ?> </a>/ <a href="<?php echo e(url('view-categories/'.$menu->categories->slug.'/'.$menu->name)); ?>"><?php echo e($menu->name); ?></a></h6>
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

                            <label style="font-size: 16px" class="float-end badge bg-danger trending_tag"><?php echo e($menu->trending == '1'?'Promo':''); ?></label>
                        </h2>
                        <hr>
                        <label for="" class="me-3">Original Price : <s>Rp. <?php echo e($menu->original_price); ?></s> </label>
                        <label style="font-weight: bold" class="me-3">menu Price : Rp. <?php echo e($menu->menu_price); ?> </label>
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
                                <input type="hidden" value="<?php echo e($menu->id); ?>" class="menu_id">
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
                                <button type="button" class="btn btn-primary me-3 float-start"><a class="text-white" href="<?php echo e(url('qrcode/'.$menu->id)); ?>">Scan QR<i class="fa fa-qr"></i></a></button>
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
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa fa-star"></i> Rate this menu
                                </button>
                                <a href="<?php echo e(url('review/'.$menu->slug.'/user-review')); ?>" class="btn btn-link" >
                                    <i class="fa fa-comment"></i> Write a review
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for=""><?php echo e($item->User->name.' '.$item->User->last_name); ?></label>
                            <?php if($item->user_id == Auth::id()): ?>
                                <a href="<?php echo e(url('edit-review/'.$menu->slug.'/user-review')); ?>">edit</a>
                            <?php endif; ?>
                            <br>
                            <?php if($item->Rating): ?>
                            <?php
                                $user_rated = $item->Rating->stars
                            ?>
                                <?php for($i=1;$i<=$user_rated;$i++): ?>
                                <i class="fa fa-star checked"></i>
                                <?php endfor; ?>
                                <?php for($j=$user_rated+1;$j<=5;$j++): ?>
                                    <i class="fa fa-star"></i>
                                <?php endfor; ?>
                            <?php endif; ?>
                            
                            <small>Reviewed on <?php echo e($item->created_at->format('d M Y')); ?></small>
                            <p>
                                <?php echo e($item->reviews); ?>

                            </p>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan - Copy\resources\views/frontend/menu/view.blade.php ENDPATH**/ ?>