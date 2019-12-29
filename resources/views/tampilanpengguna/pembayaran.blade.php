
    @extends('tampilanpengguna.app')
    @section('content')
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
<section class="blog_area single-post-area section_padding">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="single-post">
                
    <form action="/pembayaran/store" method="POST" >
      @csrf
        <div class="form-group">
          <label for="namaLengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" placeholder="Nama Lengkap Anda">
       
        </div>
        <div class="form-group">
          <label for="atasNama">Atas Nama</label>
          <input type="text" class="form-control" id="atasNama" name="atas_nama" placeholder="Atas Nama">
        </div>
        <label for="jenisKelamin">Jenis Kelamin</label>
        <div class="form-group">
    
        <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="L">Laki laki</label>
        <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="P">Perempuan</label>
        </div>
          <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="number" class="form-control" id="handphone" name="handphone" placeholder="Handphone">
          </div>
          <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Nominal Yang Anda Bayarkan">
          </div>
          <div class="form-group">
            <label for="jenisAkad">Jenis Akad</label>
              <select name="akad_donasi" id="jenisAkad" class="form-control">
                <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                <option value="Zakat Maal">Zakat Maal</option>
                <option value="Zakat Hadiah">Zakat Hadiah</option>
              </select>
              <div class="form-group">
                <label for="namaBank">Nama BANK</label>
                <select name="bank" id="namaBank" class="form-control">
                <option value="BNI ">BNI 19905634533 Miftahul</option>
                <option value="BNI ">BNI 19905634533 Miftahul</option>
                <option value="BNI ">BNI 19905634533 Miftahul</option>
                </select>
              </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection