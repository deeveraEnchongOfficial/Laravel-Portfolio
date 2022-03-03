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
          <h1 class="m-0">Edit Home Section</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Profile</li>
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
        @if(session()->has('error'))
        <span class="alert alert-danger w-100 p-3">
          <strong>{{ session()->get('error') }}</strong>
        </span>
        @endif
        @if(session()->has('success'))
        <span class="alert alert-success w-100 p-3">
          <strong>{{ session()->get('success') }}</strong>
        </span>
        @endif
        <main role="main" class="mx-3">
          <form action="{{ route('profile.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <img src="image/Profile/{{ Auth::user()->profile_image }}" class="oo img-thumbnail" width="200"
                  height="200"><br>
                <label>Profile Pic (Minimum 600px X 600px, Maxsize 2mb)</label>
                <div class="custom-file">
                  <input type="file" name="profile_image" value="image/Profile/{{ Auth::user()->profile_image }}"
                    class="custom-file-input" id="profilepic">
                  <label class="custom-file-label" for="profilepic">Choose Profile Pic...</label>
                </div>
              </div>
              <div class="form-group col-md-6">
                <img src="image/Profile/{{ Auth::user()->cover_image }}" class="oo img-thumbnail" width="315.7"
                  height="200">
                <label>Home Cover (Minimum 1920 X 1280, Maxsize 2mb)</label>
                <div class="custom-file">
                  <input type="file" name="cover_image" value="image/Profile/{{ Auth::user()->cover_image }}"
                    class="custom-file-input" id="profilepic">
                  <label class="custom-file-label" for="profilepic">Choose Home Cover...</label>
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="name" name="name" value="{{ Auth::user()->name }}" class="form-control" id="name"
                  placeholder="Enchong Dee Vera">
              </div>

              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="email"
                  placeholder="">
              </div>
            </div>
            <input type="submit" name="save" class="btn btn-primary  float-right" value="Save Changes">
          </form>

          <hr>
          <h4 ID="skillsection">Password Section</h4>


          <form action="{{ route('changepass.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="password">Old Password</label>
                <input type="password" name="current_password" value=""
                  class="form-control @error('current_password') is-invalid @enderror" id="opass" placeholder="">
                @error('current_password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-4">
                <label for="password">New Password</label>
                <input type="password" name="password" value=""
                  class="form-control @error('password') is-invalid @enderror" id="npass" placeholder="">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-4">
                <label for="password">Confirm Password</label>
                <input type="password" name="confirm_password" value=""
                  class="form-control @error('confirm_password') is-invalid @enderror" id="cpass" placeholder="">
                @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <input type="submit" name="save" class="btn btn-primary" value="Update Password">
            
          </form>



          <hr>
          <h4 ID="skillsection">More Information</h4>
          @foreach ($information as $informations)
          <form action="{{ route('information.update', $informations->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="twitter">Twitter</label>
                <input type="text" class="form-control" value="{{ $informations->Twitter }}" name="Twitter" id="twitter"
                  placeholder="https://twitter.com">
              </div>
              <div class="form-group col-md-6">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" value="{{ $informations->Facebook }}" name="Facebook" id="facebook"
                  placeholder="https://facebook.com">
              </div>
              <div class="form-group col-md-6">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" value="{{ $informations->Instagram }}" name="Instagram"
                  id="instagram" placeholder="https://instagram.com">
              </div>
              <div class="form-group col-md-6">
                <label for="cloud_storage">Cloud Storage</label>
                <input type="text" class="form-control"
                  value="{{ $informations->Cloud_Storage }}"
                  name="Cloud_Storage" id="cloud_storage" placeholder="https://drive.google.com/">
              </div>
              <div class="form-group col-md-6">
                <label for="github">Github</label>
                <input type="text" class="form-control" value="{{ $informations->Github }}" name="Github"
                  id="github" placeholder="https://github.com">
              </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="Address" value="{{ $informations->Address }}" class="form-control" id="address"
                placeholder="Malanay, Sta.Barbara Pangasinan">
            </div>
            <div class="form-row">
              <div class="form-group col-md-9">
                <label for="profession">Proffesion Titles (Separate with ',' comma)</label>
                <input type="text" class="form-control" name="Proffesion"
                  value="{{ $informations->Proffesion }}" id="profession"
                  placeholder="Web Developer,PHP Developer,Graphic Designer">
              </div>
              <div class="form-group col-md-3">
                <label for="mobile">Mobile No</label>
                <input type="text" class="form-control" value="{{ $informations->Mobile_No }}" name="Mobile_No" id="mobile"
                  placeholder="+639307248329">
              </div>
            </div>
            <input type="submit" name="save" class="btn btn-primary float-right" value="Save Changes">
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