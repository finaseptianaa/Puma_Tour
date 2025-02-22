<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Dashboard</title>
    
    <link rel="stylesheet" href="/admin/css/bootstrap.css">
    
    <link rel="stylesheet" href="/admin/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="/admin/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/admin/css/app.css">
    <link rel="shortcut icon" href="/admin/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/lib/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <a href="/">
        <img src="/admin/images/logo.jpg" alt="" style="width: 150px; height: auto;">
        </a>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
                <li class="text-center">Halo, {{Auth::user()->nama}}</li>
                <li class="text-center"><b>{{Auth::user()->level}}</b></li>
                <li class='sidebar-title'>Main Menu</li>

                <li class="sidebar-item active ">
                    <a href="/dashboard" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>

                <li class='sidebar-title'>Menu</li>
            
                @if(Auth::user()->level == 'konsumen')
                <li class="sidebar-item  ">
                    <a href="/pemesanan" class='sidebar-link'>
                        <i class="bi bi-envelope-paper"></i>
                        <span>Pemesanan Paket Wisata</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level == 'admin')
                <li class="sidebar-item  ">
                    <a href="/paket" class='sidebar-link'>
                        <i class="bi bi-airplane"></i>
                        <span>Paket Wisata</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->level == 'bendahara')
                <li class="sidebar-item  ">
                    <a href="/manajemen/pemesanan" class='sidebar-link'>
                        <i class="bi bi-envelope-paper"></i>
                        <span>Manajemen Pemesanan</span>
                    </a>
                </li>
                @endif
                <li class="sidebar-item  ">
                    <a href="/laporan" class='sidebar-link'>
                        <i class="bi bi-journal-text"></i>
                        <span>Laporan Pemesanan</span>
                    </a>
                </li>
                @if(Auth::user()->level == 'admin')
                <li class="sidebar-item  ">
                    <a href="/pengguna" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                        <span>Manajemen Pengguna</span>
                    </a>
                </li>
                @endif
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="/admin/images/avatar/nurul.png" alt="" srcset="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> {{ Auth::user()->nama }}</a>
                                <div class="dropdown-divider"></div>
                                
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item" ><i data-feather="log-out"></i> Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="main-content container-fluid">
                @yield('konten')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2024 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="">Fina Septiana</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/admin/js/feather-icons/feather.min.js"></script>
    <script src="/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admin/js/app.js"></script>
    
    <script src="/admin/vendors/chartjs/Chart.min.js"></script>
    <script src="/admin/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/admin/js/pages/dashboard.js"></script>

    <script src="/admin/js/main.js"></script>
</body>
</html>
