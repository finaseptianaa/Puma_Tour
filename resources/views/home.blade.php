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
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
                        <a href="#tentang_kami" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#paket_wisata" class="nav-item nav-link">Paket Wisata</a>
                        <a href="#galeri" class="nav-item nav-link">Galeri</a>
                        <div class="nav-item dropdown">
                        </div>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
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

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/home.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">LIBURAN SERU DAN BERKESAN BERSAMA KAMI</h4>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Selamat Datang di Puma Tour & Trvel</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Dengan Puma Tour, impian perjalanan Anda lebih dekat dari yang Anda bayangkan. Pesan sekarang dan nikmati liburan tanpa ribet dengan kami!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/home.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s"> LIBURAN SERU DAN BERKESAN BERSAMA KAMI</h5>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Selamat Datang di Puma Tour & Trvel</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Dengan Puma Tour, impian perjalanan Anda lebih dekat dari yang Anda bayangkan. Pesan sekarang dan nikmati liburan tanpa ribet dengan kami! 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- TENTANG KAMI -->
        <div class="container-fluid about py-5"id='tentang_kami'>
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #FF8DA1 transparent #FF8DA1;">
                            <img src="img/kami.jpg" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">Tentang Kami</h5>
                        <h1 class="mb-4"> <span class="text-primary">PT. Puma Star Jaya</span></h1>
                        <p class="mb-4">PT. Puma Star Jaya adalah perusahaan penyedia jasa tour travel</p>
                        <p class="mb-4"></p>
                        <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                                <p class="mb-0"><i class=></i>VISI MISI</p>
                            </div>
                        <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Memberikan pelayanan dengan mutu terbaik sesuai dengan harapan dan keinginan pelanggan, dengan fokus utama pada kenyamanan dan kepuasan konsumen.</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menciptakan efisiensi pengeluaran biaya perjalanan konsumen tanpa mengurangi mutu pelayanan</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menganalisis berbagai kemungkinan yang diperlukan sebelum perjalanan untuk mencapai efisiensi biaya.</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan kenyamanan dan kepuasan pelanggan sebagai prioritas utama dalam setiap layanan yang diberikan</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class=></i></p>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">REKOMENDASI DESTINASI FAVORIT</h5>
                    </div>
                    <h1 class="display-5 mb-4">Pilihan destinasi terbaik untuk liburan yang tak terlupakan</h1>
                    <p class="mb-0">Jelajahi keindahan alam dan kekayaan budaya Indonesia melalui destinasi-destinasi pilihan kami yang telah menjadi favorit wisatawan dari berbagai belahan dunia</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/bromo-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Bromo</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Bromo</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Gunung Bromo adalah salah satu gunung api yang masih aktif di Indonesia. Gunung yang memiliki ketinggian 2.392 meter di atas permukaan laut ini merupakan destinasi andalan Jawa Timur.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/Lot.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Tanah Lot</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Tanah Lot</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Tanah Lot adalah sebuah kawasan pantai di Bali yang memiliki pura Hindu di atas batu karang di tengah laut. Pura Tanah Lot merupakan salah satu destinasi wisata paling ikonik di Bali dan terkenal dengan keindahan alamnya. </p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/Bedugul.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Danau Bedugul</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Danau Bedugul</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Bedugul adalah sebuah kawasan wisata sejuk di ketinggian 1.200 meter di atas permukaan laut yang sangat terkenal di Bali. Panorama pegunungan dan danau menjadi sajian utama, letaknya ada di tengah pulau antara Denpasar dan Singaraja.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/perahu-02.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Tangkupan Perahu</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Tangkupan Perahu</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">terletak dibandung</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/coban.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Air Terjun Coban Rondo</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Air Terjun Coban Rondo</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">terletak dimalang </p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/lava.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Offroad Tour Merapi</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Detail</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Offroad Tour Merapi</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">terletak dijogjakarta</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
        <!-- Features Start -->
        <!-- Features End -->

        <!-- PAKET WISATA -->
        <div class="container-fluid country overflow-hidden py-5" id="paket_wisata">
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Paket Wisata</h5>
                    </div>
                </div>
                <div class="row g-4 text-center">
                    @foreach($paket as $data)
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="{{asset('upload/gambar/'.$data->foto)}}" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-name">
                                
                            </div>
                        </div>
                        <a href="/pemesanan/paket/{{ $data->id }}" class="text-dark">{{$data->judul}}</a> <br>
                        <a href="/pemesanan/paket/{{ $data->id }}" target="_blank" class="btn btn-danger mt-3">Pesan Sekarang</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Countries We Offer End -->

        <!-- GALERI -->
        <div class="container-fluid training overflow-hidden bg-light py-5 " id='galeri'>
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Galeri</h5>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/galeri.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/galeri-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/galeri-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/galeri-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.9s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/galeri-4.png" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.1s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/galeri-5.png" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.3s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/galeri-6.png" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.5s">
                <div class="training-item">
                    <div class="training-inner">
                        <img src="img/galeri-7.png" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Training End -->


        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Hotel Support</h5>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/sany.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Sany Rosa Hotel</h4>
                                    <p class="mb-0">Bandung</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/kangen.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Hotel Grand Kangen</h4>
                                    <p class="mb-0">Yogyakarta</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/aster.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Aster Hotel</h4>
                                    <p class="mb-0">Malang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/brits.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Brits</h4>
                                    <p class="mb-0">Bali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Bus Support Sumex 99</h5>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/luar.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/dalam.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/kursi.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/supir.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- CONTACT -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" id='contact'>
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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>