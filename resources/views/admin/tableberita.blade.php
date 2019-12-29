@extends('admin.app')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
         <h1>Posts</h1>
            <div class="section-header-button">
              <a href="tambahberita" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">All Posts</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Posts</h4>
                </div>
                <div class="card-body">
                <div class="float-right">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="clearfix mb-3"></div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        
                        <th>Title</th>
                        <th>Tanggal</th>
                        <th>Author</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                      </tr>
                      @foreach ($berita as $b)
                      <tr>
                          
                          <th> {{$b->title}}
                              <div class="table-links">
                              <a href="/previewBerita/{{$b->id}}">View</a>
                                  <div class="bullet"></div>
                              <a href="/editBerita/{{$b->id}}">Edit</a>
                                  <div class="bullet"></div>
                              <a href="/destroy/{{$b->id}}" class="text-danger">Trash</a>
                                </div>
                          </th>
                  
                          <th>{{$b->tanggal}}</th>
                          <th>{{"kucing"}}</th>
                        <th>
                          <img src="{{$b->thumbnail}}" width="50px" alt=""></th>
                          <th><span class="badge badge-success">{{$b->status}}</span></th>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </section>
</div>

@endsection
