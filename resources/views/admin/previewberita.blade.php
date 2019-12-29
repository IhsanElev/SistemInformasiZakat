<!DOCTYPE html>
<html lang="en">

  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>kucing</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/1995643799.js" crossorigin="anonymous"></script>
</head>

<header class="main_menu home_menu " >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"> <img src="img/footer_logo.png"  alt="Swadaya Ummah"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">kalkulator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">berita</a>
                            </li>
                            @if (auth::check())
                                @if(!empty($halaman) && $halaman == 'pembayaran')
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="/pembayaran">pembayaran</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="#" class="dropdown-item">Form Pembayaran</a>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="#" class="dropdown-item">Data pembayaran</a>
                                    </div>
                            </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="/pembayaran">pembayaran</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="#" class="dropdown-item">Form Pembayaran</a>
                                 
                                        <a href="#" class="dropdown-item">Data pembayaran</a>
                                    </div>
                                </li> 
                                    @endif
                            @endif
                                @if(!isset(auth::user()->id))
                               <li class="nav-item">
                                <a class="nav-link" href="/register">Daftar</a>
                                </li>
                                @endif
                               
                            @if (Auth::check())
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#" >profil</a>
                                        <a class="dropdown-item" href="#"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

    
                                        <form id="logout-form" action="#" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                       
                                    </div>
                            </li>
                            @else 
                            <li class="nav-item" >
                            <a class="nav-link" href="#">{{__('Login')}}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="single_product">

                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>   
</header>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="breadcrumb_iner text-center">
                <div class="breadcrumb_iner_item">
                   <h2>blog details</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- breadcrumb start-->
 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12 posts-list">
             <div class="single-post">
                 @foreach ($berita as $b)
                <div class="feature-img">
                   <img class="img-fluid" src={{$b->thumbnail}} alt="">
                </div>
                <div class="blog_details">
                   <h2>{{$b->title}}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                   </ul>
                   <p class="excert">
                       {{$b->isi}}
                    </p>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
 </section>
 <footer class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <a href="index.html" class="footer_logo_iner"> <img src="img/logo_succ.png" alt="#"> </a>
                    
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>Info Kontak</h4>
                    <p>Alamat : Jl. Soekarno - Hatta No.70 A, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28289.</p>
                    <p>Nomor Hp : 0813 7172 8631</p>
                    <p>Email : Admin@swadayaummah.com</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Ikuti Kami Di:</h4>
                    <ul>
                       <li><a href=""><i class="fab fa-whatsapp-square"></i><span> Layanan Muzaki</span></a></li>
                       <li><a href="https://web.facebook.com/swadaya.ummah"><i class="fab fa-facebook-square"></i><span> Swadaya Ummah</span></a></li>
                       <li><a href="https://web.facebook.com/swadaya.ummah"><i class="fab fa-instagram"></i><span> @Swadaya Ummah</span></a></li>
                       <li><a href=""><i class="fab fa-twitter-square"></i><span> @Swadaya Ummah</span></a></li>
                        
                    </ul>
                    </div>
                </div>
        </div>
    </div>
</footer>

 <script src="{{asset('js//jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('js//popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('js//bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('js//jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('js//swiper.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('js//masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('js//owl.carousel.min.js')}}"></script>
<script src="{{asset('js//jquery.nice-select.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('js//slick.min.js')}}"></script>
<script src="{{asset('js//jquery.counterup.min.js')}}"></script>
<script src="{{asset('js//waypoints.min.js')}}"></script>
<script src="{{asset('js//contact.js')}}"></script>
<script src="{{asset('js//jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js//jquery.form.js')}}"></script>
<script src="{{asset('js//jquery.validate.min.js')}}"></script>
<script src="{{asset('js//mail-script.js')}}"></script>

