@extends('tampilanpengguna.app')
@section('content')

<section class="breadcrumb breadcrumb_bg">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                      <h2>Unggah Bukti</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="blog_area section_padding">
  <div class="container">
      <div class="row">
<form action="/unggah/{{$pembayaran->id}}" class="md-form" method="POST" enctype="multipart/form-data" >
  @csrf
  <div class="file-field">
    <div class="z-depth-1-half mb-4">
      <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
        alt="example placeholder">
    </div>
    <div class="d-flex justify-content-center">
      <div class="btn btn-mdb-color btn-rounded float-left">
        <span>Choose file</span>
        <input type="file" name="unggah_bukti">
      </div>
    </div>
  </div>
<div class="form-group">
  <input type="submit" name="Submit" class="btn btn-primary" value="submit" />
  <a href="tbpembayaran" class="btn btn-warning" >Upload Nanti</a>
</div> 

</form>


      </div>
  </div>
</section>
@endsection