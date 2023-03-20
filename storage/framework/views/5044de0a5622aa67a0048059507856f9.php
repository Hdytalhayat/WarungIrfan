

<?php $__env->startSection('title'); ?>
    Mode
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
<?php echo $__env->make('layouts.navbarmenus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Awal Animasi Mode -->
<style>
  .row {
    animation-duration: 7s;
    animation-name: slidein;
    animation-iteration-count:unset;
    animation-direction: alternate;
        }
        
        @keyframes slidein {
    from {
      margin-inline-end:  100%;
      width: 300%;
    }
  
    to {
      margin-left: 0%;
      width: 100%;
    }
  }
</style>
<!-- Akhir Animasi Mode -->

      <br><br><br><br>

      <!-- Pembuka bungkusan -->
      <div class="row justify-content-center">


        <!-- Awal Tampilan Mode Quiz -->
        <div class="col-sm-3 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">QUIZ</h5>
              <p class="card-text">Mode ini ditujukan bagi orang yang suka tantangan</p>
              <a href="" class="btn btn-primary">Klik Disini</a>
            </div>
          </div>
        </div>
        <!-- Akhir Tampilan Mode Quiz -->


        <!-- Awal Tampilan Mode Normal -->
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body ">
              <h5 class="card-title">NORMAL</h5>
              <p class="card-text">Mode ini ditujukan bagi orang yang beneran lapar</p>
              <a href="/view-categories" class="btn btn-primary">Klik Disini</a>
            </div>
          </div>
        </div>
        <!-- Akhir Tampilan Mode Normal-->


        <!-- Awal Tampilan Mode QR Code -->
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">QR CODE</h5>
              <p class="card-text">Mode ini ditujukan bagi orang yang suka AR</p>
              <a href="../6 QR MODE/index.html" class="btn btn-primary">Klik Disini</a>
            </div>
          </div>
        </div>
        <!-- Akhir Tampilan Mode QR Code -->

       <!-- Penutup bungkusan -->
      </div>

      <br><br><br><br><br>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/frontend/mode.blade.php ENDPATH**/ ?>