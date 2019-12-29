<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forms &rsaquo; Form Validation &mdash; Stisla</title>
</head>
@extends('admin.app');

@section('content')

<div class="main-content">
<section class="section">    
<div class="container">
<div class="card" >
<form action="/update/{{$pembayaran->id}}" method="POST" class="needs-validation" novalidate="">
      @csrf
      <div class="card-header">
        <h4>JavaScript Validation</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_lengkap" required="required">
          <div class="invalid-feedback">
            Namanya siapa?
          </div>
        </div>
          <div class="form-group">
            <label>Atas Nama</label>
            <input type="text" class="form-control" name="atas_nama" required="required">
            <div class="invalid-feedback">
              Namanya siapa?
            </div>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" required="required">
            <div class="invalid-feedback">
              Namanya siapa?
            </div>
          </div>
          <div class="form-group">
            <label>No Handphone</label>
            <input type="number" class="form-control" name="handphone" required="required">
            <div class="invalid-feedback">
              Namanya siapa?
            </div>
          </div>
          <div class="form-group">
            <label>Nominal</label>
            <input type="text" class="form-control" name="nominal" required="required">
            <div class="invalid-feedback">
              Namanya siapa?
            </div>
          </div>
          <div class="form-group">
            <label>Akad Donasi</label>
            <select name="akad_donasi" id="" class="form-control">
                <option value="zakat_penghasilan">zakat penghasilan</option>
                <option value="zakat mal">zakat mal</option>
              </select>
            <div class="invalid-feedback">
              Namanya siapa?
            </div>
          </div>
          <div class="form-group">
              <label>Bank</label>
              <input type="text" class="form-control" name="bank" required="required">
              <div class="invalid-feedback">
                Namanya siapa?
              </div>
          </div>
         
        </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
</section>
</div>
@endsection

</body>
</html>