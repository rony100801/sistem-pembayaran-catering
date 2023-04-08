<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
</head>

<body>


  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SMA xyz</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="logout.php">Keluar</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">

    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">

        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Data Kelas
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Data Siswa
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Data Users
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Transaksi
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Laporan
              </a>
            </li>

          </ul>
        </div>
      </nav>