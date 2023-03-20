

<?php $__env->startSection('title'); ?>
    Welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="beranda" class="beranda">
    <h1 class="animate__animated animate__fadeInDown">Selamat Datang di Warung Makan</h1>
    <p>Nikmati hidangan lezat kami dengan suasana yang nyaman</p>
    <p class="btn-pesan"><a class="btn-pesan" href="mode">Pesan Sekarang</a></p>
  </div>
    <section class="menu-section">
      <h1 id="tentang">.</h1><br>

      <h2 id="tentang">Tentang Kami</h2>
      <div class="menu-container">
        <div class="row">
          <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body text-center mb-3">
                <img src="avatar.jfif" alt="">
                <h5 class="card-title">Iffad</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body text-center mb-3">
                <img src="avatar.jfif" alt="">
                <h5 class="card-title">Ardi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body text-center mb-3">
                <img src="avatar.jfif" alt="">
                <h5 class="card-title">Hayat</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body text-center mb-3">
                <img src="avatar.jfif" alt="">
                <h5 class="card-title">Irfan</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Akhir Tentang Kami -->



<!-- Awal Kontak -->
    <section class="contact-section">
      <h1 id="kontak">.</h1><br>
      <h2>Hubungi Kami</h2><br><br>
      <form>
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Pesan</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit" class="btn">Kirim</button>
      </form>
    </section>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/frontend/index.blade.php ENDPATH**/ ?>