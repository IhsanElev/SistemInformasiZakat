@extends('admin.app')
@section('content')

 <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Table</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table</div>
        </div>
      </div>
    
      <div class="section-body">
            <h2 class="section-title">Table</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p>
            <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>tabel pembayaran</h4>
                          <div class="card-header-form">
                            <form action="/pembayaran/cari" method="GET">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="card-body p-0">
                          <div class="table-responsive">
                            <table class="table table-striped">
                              <tr>
                                <th>Nama Lengkap</th>
                                <th>atas nama</th>
                                <th>Nomin al</th>
                                <th>Jenis Zakat</th>
                                <th>bank</th>
                                <th>foto bukti</th>
                                <th>Action</th>
                              </tr>	
                @foreach($pembayaran as $p)
                    <tr>
                        <th>{{ $p->nama_lengkap }}</th>
                        <th>{{ $p->atas_nama}}</th>  
                        <th>{{ $p->nominal}}</th>
                        <th>{{ $p->akad_donasi}}</th>
                        <th>{{ $p->bank}}</th>
                    <th>
                      <a href="{{$p->unggah_bukti}}" data-fancybox="gallery"><img src="{{$p->unggah_bukti}}" width="50px" alt=""></a>
                    </th>
                    <th>
                        <a href="/konfirmasi/{{$p->id}}" class="btn btn-icon btn-primary">Konfirmasi</a>
                        |
                        <a href="/tolak/{{$p->id}}" class="btn btn-icon btn-danger">Tolak</a>
                        </th>
                    </tr>
                @endforeach
                    </table>

               
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
@endsection