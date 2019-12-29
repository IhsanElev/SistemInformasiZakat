 @extends('tampilanpengguna.app')
@section('content')
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
       

            
@endsection