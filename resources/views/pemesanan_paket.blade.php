<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Puma Tour</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>


        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-5 text-center text-lg-start mb-lg-0">
                    <div class="d-flex">
                        <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>pumatour@gamail.com</a>
                        <a href="#" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>082269616188</a>
                    </div>
                </div>
                <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0"><img src="img/logo.png" class="img-fluid" alt="">PumaTour</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/#tentang_kami" class="nav-item nav-link">Tentang Kami</a>
                        <a href="/#paket_wisata" class="nav-item nav-link">Paket Wisata</a>
                        <a href="/#galeri" class="nav-item nav-link">Galeri</a>
                        <div class="nav-item dropdown">
                        </div>
                        <a href="/#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    @if(Auth::check())
                    <a href="/dashboard">Halo, {{Auth::user()->nama}}</a>
                    @else
                    <a href="/registrasi" class="btn btn-primary border-secondary rounded-pill py-1 px-3 px-lg-2 mb-2 mb-md-2 mb-lg-0">Registrasi</a>
                    <a href="/login" class="btn btn-primary border-secondary rounded-pill py-1 px-3 px-lg-2 mb-2 mb-md-2 mb-lg-0">Login</a>
                    @endif
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->



        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Pemesanan Paket</h5>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-5">
                            <img src="{{asset('upload/gambar/'.$paket->foto)}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h5>{{$paket->judul}}</h5>
                            <p>
                                DESTINASI   : {{$paket->destinasi}} <br>
                                FASILITAS   : {{$paket->fasilitas}} <br>
                                BUS         : {{$paket->bus}} <br>
                                HARGA       :Rp {{number_format($paket->harga,0,'.','.')}} <br>
                                @if($kupon)
                                POTONGAN HARGA       : Rp{{number_format($kupon->potongan,0,'.','.')}} <br>
                                @endif
                            </p>
                            @if($kupon)
                                <div class="alert alert-success">
                                    SELAMAT ANDA MENDAPATKAN POTONGAN HARGA SEBESAR Rp{{number_format($kupon->potongan,0,'.','.')}}
                                </div>
                            @endif

                            <h5>Tawar Harga</h5>
                            <p>
                                Untuk mendapatkan penawaran harga terbaik dari kami, silahkan hubungi nomor berikut 
                                <a href="https://wa.me/62895329933627" target="_blank" >0895329933627</a>, kemudian masukkan
                                kode dibawah jika sudah mendapatkan kode nya dari kami.
                            </p>
                            <form action="" class="mb-4">
                                <div class="input-group">
                                    <input type="text" name="kode" class="form-control" placeholder="Masukkan kode" required>
                                    <button class="btn btn-info">Cek Potongan Harga</button>
                                </div>
                            </form>

                            <h5>Formulir Pemesanan</h5>
                            <form action="/pemesanan/paket/{{$paket->id}}/submit" method="post">
                                @csrf
                                @if($kupon)
                                    <input type="hidden" name="kode" value="{{$kupon->kode}}">
                                @endif
                                <label>Tanggal Berangkat</label>
                                <input type="date" name="tanggal_berangkat" class="form-control">
                                <label>Nama Rombongan</label>
                                <input type="text" name="nama_rombongan" class="form-control">
                                <label>Jumlah Pax (Orang)</label>
                                <input type="text" name="jumlah_pax" class="form-control">
                                <label>No hp(whasapp)</label>
                                <input type="text" name="no_hp" class="form-control">

                                <button class="btn btn-danger mt-3">Pesan sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i>Jalan Suttan Dumas No. A8-A9 Metro Selatan Kota Metro Lampung</a>
                            <a href=""><i class="fas fa-envelope me-2"></i>pumatourlampung@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i>0821-1444-4494</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Jam Buka</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Senin-Sabtu:</h6>
                                <p class="text-white mb-0">09.00 am to 04.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Minggu:</h6>
                                <p class="text-white mb-0">libur</p>
                            </div>
                        </div>
                    </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>2024</a>, Fina Septiana</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    </body>

</html>