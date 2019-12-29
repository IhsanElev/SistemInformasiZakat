@extends('tampilanpengguna.app')
@section('content')
<?php
function bulan($tanggal){
	$bulan = array (
		1 =>   'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Agu',
		'Sep',
		'Okt',
		'Nov',
		'Des'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $bulan[ (int)$pecahkan[1] ];
}
function tgl($tanggal){
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2];
}
?>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                     <h2>Daftar Berita</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog_left_sidebar">
                    @foreach ($berita as $b)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            
                            <img class="card-img rounded-0" width="400px" height="600px" src="{{$b->thumbnail}}" alt="">
                            <a href="#" class="blog_item_date">
                            <h3>{{tgl($b->tanggal)}}</h3>
                            <p>{{bulan($b->tanggal)}}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="/detailBerita/{{$b->id}}">
                            <h2>{{$b->title}}</h2>
                            </a>
                        <br>
                        
                                @if(str_word_count($b->isi)>60)
                                   {{ substr($b->isi,0,200)."[...]" }} 
                                @else
                                    <p>{{$b->isi}}</p>
                                   
                                @endif
                           
                        </div>
                        
                    </article>
                    {{ $berita->links() }}
                    @endforeach
               
                          
                              
                           
                      
                </div>
            </div>
       
        </div>
    </div>
</section>
<!--================Blog Area =================-->
       
@endsection