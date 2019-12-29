
                  
<!-- 1. Add latest jQuery and fancybox files -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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

@include('tampilanpengguna.header')
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                      <h2>Pembayaran</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>   

<div class="main-content">
  <section class="section ">
 
    <div class="section-body">
      <h2 class="section-title">Hi, Ujang!</h2>
      

      <div class="row mt-sm-4">
        <div class="col-12">
          
        </div>
        <div class="col-md-12 col-lg-7">
          <div class="card">
            <form method="post" action="/updateprofil" class="needs-validation" novalidate="">
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>First Name</label>
                      <input type="text" class="form-control" value="{{$user->name}}" name="name" required="">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Email</label>
                      <input type="email" class="form-control" value="{{$user->email}}" required="">
                      <div class="invalid-feedback">
                        Please fill in the email
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>Phone</label>
                      <input type="tel" class="form-control" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Bio</label>
                      <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-0 col-12">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                        <div class="text-muted form-text">
                          You will get new information about products, offers and promotions
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{asset('../assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('../node_modules/simpleweather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('../node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('../node_modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('../node_modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('../node_modules/summernote/dist/summernote-bs4.js')}}"></script>
<script src="{{asset('../node_modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('../assets/js/scripts.js')}}"></script>
<script src="{{asset('../assets/js/custom.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('../assets/js/page/index-0.js')}}"></script>
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
@include('tampilanpengguna.footer')