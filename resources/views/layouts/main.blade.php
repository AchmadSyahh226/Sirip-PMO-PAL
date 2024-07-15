<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JUDUL -->
    <title>SIRIP PMO</title>

    <!-- ICON BILAH JUDUL -->
    <link rel="icon" href="#" type="image/x-icon">

    <!-- LINK ICON -->
    <script src="https://kit.fontawesome.com/a29b04c384.js" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-2.0.7/b-3.0.2/r-3.0.2/sb-1.7.1/datatables.min.css">

    <!-- JAVASCRIPT DATATABLE -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
    <script src="js/script.js"></script>

  </head>
  <body class="bg-light">

   <!-- NAVBAR -->
  {{-- <nav class="navbar navbar-expand-lg" style="background-color: #637A9F;">
    <div class="container-fluid">
    <!-- LOGO -->
    <a class="navbar-brand text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">SIRIP <span class="rounded shadow px-2"
                        style="background-color: white; color:#637A9F">PMO</span></a>
    <!-- BUTTON COLLAPSE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- COLLAPSE FILL -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="/home"><i class="fa-solid fa-house"></i> Milestone</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/project"><i class="fa-solid fa-business-time"></i> Proyek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/material"><i class="fa-solid fa-list"></i> Data Master</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-book"></i> Laporan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-money-bill"></i> Payment</a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-warning disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="/session/logout" class="btn btn-danger"><i class="fa-solid fa-right-to-bracket"></i> Logout</a>
      </form>
    </div>
  </div>
</nav>
--}}

    <!-- OFFCANVAS -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Tentang</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>SIRIP PMO singkatan dari Sistem Informasi Realisasi Proyek Divisi Production Management Office (PMO) Departemen Rendal Pra Produksi. Website SIRIP PMO merupakan situs web untuk mengelola realisasi proyek pembuatan kapal.</p>
  </div>
</div>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-white" style="background-color:#637A9F">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 mt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <span class="fs-5 d-none d-sm-inline">SIRIP <span class="rounded shadow px-2"
                        style="background-color: white; color:#637A9F">PMO</span></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    {{-- <li class="nav-item">
                        <a href="/home" class="nav-link align-middle text-white px-0">
                            <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Beranda</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fa-solid fa-list"></i> <span class="ms-1 d-none d-sm-inline">Data Master</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="/material-master" class="nav-link px-0 text-white"> 1. <span class="d-none d-sm-inline">Material</span></a>
                            </li>
                            <li>
                                <a href="/category-master" class="nav-link px-0 text-white"> 2. <span class="d-none d-sm-inline">Kategori</span></a>
                            </li>
                            <li>
                                <a href="/payment-master" class="nav-link px-0 text-white"> 3. <span class="d-none d-sm-inline">Payment</span></a>
                            </li>
                            <li>
                                <a href="/milestone-master" class="nav-link px-0 text-white"> 4. <span class="d-none d-sm-inline">Milestone</span></a>
                            </li>
                            <li>
                                <a href="/project-master" class="nav-link px-0 text-white"> 5. <span class="d-none d-sm-inline">Proyek</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/project/select" class="nav-link px-0 align-middle text-white">
                            <i class="fa-solid fa-business-time"></i> <span class="ms-1 d-none d-sm-inline">Detail Proyek</span></a>
                    </li>
                    <li>
                        <a href="/milestone-project" class="nav-link px-0 align-middle text-white">
                            <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Milestone Proyek</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fa-solid fa-book"></i> <span class="ms-1 d-none d-sm-inline">Laporan</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="/report" class="nav-link px-0 text-white"> 1. <span class="d-none d-sm-inline">Laporan Cash Out</span></a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li> --}}
                    <hr>
                <div class="pb-4">
                    <a href="#" class="d-flex mb-2 align-items-center text-white text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i><span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                    </a>
                    <a href="/session/logout" class="btn btn-danger d-flex align-items-center text-white text-decoration-none"><i class="fa-solid fa-right-to-bracket"></i> Logout</a>
                </div>
                </ul>

            </div>
        </div>
        <div class="col py-3">
            <!-- CONTENT -->
            <div class="container mt-4">
                @yield('content')
                {{-- Footer --}}
                <div class="container">
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <span class="mb-3 mb-md-0 text-muted">Made with <i class="fa-solid fa-heart"></i> | Copyright © 2024 PT PAL Indonesia</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-muted" href="https://x.com/PTPAL_INDONESIA?t=0iYKF6vMhUTVseENQL33RQ&s=09"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/ptpal_indonesia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/HumasPTPAL"><i class="fa-brands fa-facebook"></i></a></li>
                    </ul>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>

  @include('sweetalert::alert')

    <!-- Bootstrap Popper JS  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- <script src="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.js"></script> --}}
    </body>
</html>
