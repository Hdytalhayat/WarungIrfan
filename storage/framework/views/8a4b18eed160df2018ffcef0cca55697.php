<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Warung Irfan - <?php echo $__env->yieldContent('title'); ?></title>

    

    <!-- Style -->
    <link href="<?php echo e(asset('css/dashboard/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/jquery.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>" defer></script>

    <!-- Dashboard -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('css/dashboard/nucleo-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dashboard/nucleo-svg.css')); ?>" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('css/dashboard/material-dashboard.css')); ?>" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'NucleoIcons';
            src: URL::asset('fonts/nucleo-icons.eot');
            src: URL::asset('fonts/nucleo-icons.eot') format('embedded-opentype'), url('../fonts/nucleo-icons.woff2') format('woff2'), url('../fonts/nucleo-icons.woff') format('woff'), url('../fonts/nucleo-icons.ttf') format('truetype'), url('../fonts/nucleo-icons.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>

</head>
<body class="g-sidenav-show  bg-gray-200">
    <div class="content">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="/" target="_blank">
            <img src="<?php echo e(asset('img/logo/logo.png')); ?>" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Warung Irfan</span>
          </a>
        </div>
    
        <hr class="horizontal light mt-0 mb-2">
        <div>
          
          <ul class="navbar-nav">
            <li class="nav-item <?php echo e(Request::is('dashboard')?'active':''); ?>">
              <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(url('dashboard')); ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('categories')?'active':''); ?>">
              <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(url('categories')); ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">category</i>
                </div>
                <span class="nav-link-text ms-1">Categories</span>
              </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('add-categories')?'active':''); ?>">
              <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(url('add-categories')); ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons">add</i>
                </div>
                <span class="nav-link-text ms-1">Add Category</span>
              </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('menu')?'active':''); ?>">
              <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(url('menu')); ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons">list</i>
                </div>
                <span class="nav-link-text ms-1">Menu</span>
              </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('add-menu')?'active':''); ?>">
              <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(url('add-menu')); ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons">add</i>
                </div>
                <span class="nav-link-text ms-1">Add Menu</span>
              </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('users-list')?'active':''); ?>">
              <a class="nav-link text-white active bg-gradient-primary" href="<?php echo e(url('users-list')); ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons">person</i>
                </div>
                <span class="nav-link-text ms-1">Users</span>
              </a>
            </li>
          </ul>
    
        </div>
    
        
      </aside>

      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
          <div class="container-fluid py-1 px-3">
            
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/">Warung Irfan</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><a class="opacity-5 text-dark" href="/dashboard">Dashboard<a></li>
              </ol>
              <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
    
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><?php echo e(__('Logout')); ?></a>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form" class="d-none"><?php echo csrf_field(); ?></form>
                  </li> 
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
    
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/dashboard/core/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/core/popper.min.js')); ?>"><script>
    <script src="<?php echo e(asset('js/dashboard/plugins/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/plugins/smooth-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard/plugins/chartjs.min.js')); ?>"></script>
    <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");
  
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["M", "T", "W", "T", "F", "S", "S"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: [50, 20, 10, 22, 50, 10, 40],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
  
  
      var ctx2 = document.getElementById("chart-line").getContext("2d");
  
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            maxBarThickness: 6
  
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
  
      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");
  
      new Chart(ctx3, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6
  
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
  </body>
  
  </html>
<?php /**PATH F:\Project\NEW\WarungIrfan\resources\views/layouts/admin.blade.php ENDPATH**/ ?>