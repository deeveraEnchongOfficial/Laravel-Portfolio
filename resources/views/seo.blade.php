@extends('layouts.app')

@section('content')
<!-- Navbar -->
@include('parts.navbar')
<!-- /.navbar -->
<!-- Main Sidebar Container -->
@include('parts.sidebar')
<!--/. Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit SEO Section</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Seo</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">


        <main role="main" class="mx-3">
          @foreach ($data as $datas)
          <form action="{{ route('seo.update', $datas->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-row">
              <div class="form-group col-md-12">
                <img src="image/{{ $datas->Siteicon }}" class="img-thumbnail ooo" width="100" height="100">
              </div>

              <div class="form-group col-md-6">
                <label>Siteicon (Minimum 100px X 100px, Maxsize 2mb)</label>
                <div class="custom-file">

                  <input type="file" name="Siteicon" class="custom-file-input" id="profilepic">
                  <label class="custom-file-label" for="projectpic">Choose Pic...</label>
                </div>
              </div>

              <div class="form-group col-md-6 mt-auto">
                <label for="name">Website Title</label>
                <input type="name" name="Website_Title" value="{{ $datas->Website_Title }}" class="form-control"
                  id="name" placeholder="Enchong Dee Vera">
              </div>



              <div class="form-group col-md-12">
                <label for="email">Keywords (Seperate with ',' comma)</label>
                <input type="text" name="Keywords" value="{{ $datas->Keywords }}" class="form-control" id="email"
                  placeholder="{{ $datas->Keywords }}">
              </div>
              <div class="form-group col-md-12">
                <label for="email">Site Description (160 Characters recommended)</label>
                <input type="text" value="{{ $datas->Site_Description }}" name="Site_Description" class="form-control"
                  id="email" placeholder="{{ $datas->Site_Description }}">
              </div>
              <div class="form-group ml-auto">
                <input type="submit" class="btn btn-primary" value="Update">
              </div>

          </form>
          @endforeach
        </main>





      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">



      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('parts.footer')
@endsection