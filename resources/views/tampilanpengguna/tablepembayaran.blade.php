@extends('tampilanpengguna.app')
@section('content')
<section class="breadcrumb breadcrumb_bg">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                      <h2>pembayaran</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>  
<section class="blog_area single-post-area section_padding">
<div class="col-12">
  <div class="card">
  <div class="card-header">
    <h4>Table Pembayaran</h4>
    <div class="card-header-form">
    </div>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-striped">
      <tr>
      <th>Nama Lengkap</th>
      <th>atas nama</th>
      <th>Jenis Kelamin</th>
      <th>No handphone</th>
      <th>Nominal</th>
      <th>Jenis Zakat</th>
      <th>bank</th>
      <th>status</th>
      </tr>	
@foreach($pembayaran as $p)
<tr>
  <th>{{ $p->nama_lengkap }}</th>
  <th>{{ $p->atas_nama}}</th>
  <th>{{ $p->jenis_kelamin}}</th>     
  <th>{{ $p->handphone}}</th>
  <th>{{ $p->nominal}}</th>
  <th>{{ $p->akad_donasi}}</th>
  <th>{{ $p->bank}}</>
  <th>
    @if($p->status=="Belum Bayar")

  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pembayaran{{$p->id}}"> Upload Bukti Pembayaran </button>
    @elseif($p->status=="Menunggu")
    <h4><span class="badge badge-warning ">{{$p->status}}</span></h4>
    @elseif($p->status=="Lunas")
    <h4><span class="badge badge-success ">{{$p->status}}</span></h4>
    @else
    <h4><span class="badge badge-danger ">{{$p->status}}</span></h4>
    @endif
  </th>
   
 
</tr>
<div class="modal fade" id="pembayaran{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/unggah/{{$p->id}}" class="md-form" method="POST" enctype="multipart/form-data" >
          @csrf
          
        <div class="form-group"> 
          <label for="">Upload Bukti Pembayaran</label>
          <input type="file" class="form-controll" name="unggah_bukti">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
    </table>
    </div>
  </div>
  </div>
</div>
</section>
    @endsection
