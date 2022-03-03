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
          <h1 class="m-0">Edit About Section</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">About</li>
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

        @foreach ($about as $abouts)
        <main role="main" class="mx-3">
          <form action="{{ route('about.update', $abouts->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="ptitle">Professional Heading</label>
                <input type="text" name="Professional_Heading" value="{{ $abouts->Professional_Heading }}" class="form-control"
                  id="ptitle" placeholder="Web Developer/PHP Developer">
              </div>
              <div class="form-group col-md-12">
                <label for="psubtitle">Subheading</label>
                <input type="text" name="Subheading"
                  value="{{ $abouts->Subheading }}"
                  class="form-control" id="psubtitle" placeholder="subheading">
              </div>
              <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Short Description About You (You can Use Html Code)</label>
                <textarea class="form-control" name="Short_Description" id="exampleFormControlTextarea1" rows="3"
                  placeholder="I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive towards. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness.">{{ $abouts->Short_Description }}</textarea>
              </div>
              <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Long Description About You (You can Use Html Code)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Long_Description"
                  placeholder="I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience. I like to read, I like to write; I like to think, I like to dream; I like to talk, I like to listen. I like to see the sunrise in the morning, I like to see the moonlight at night; I like to feel the music flowing on my face, I like to smell the wind coming from the ocean. I like to look at the clouds in the sky with a blank mind, I like to do thought experiment when I cannot sleep in the middle of the night. I like flowers in spring, rain in summer, leaves in autumn, and snow in winter. I like to sleep early, I like to get up late; I like to be alone, I like to be surrounded by people. I like country’s peace, I like delicious food and comfortable shoes; I like good books and romantic movies. I like the land and the nature, I like people. And, I like to laugh.">{{ $abouts->Long_Description }}</textarea>
              </div>

              <div class="form-group col-md-6">
                <label for="bd">Date of Birth</label>
                <input type="text" name="Date_of_Birth" value="{{ $abouts->Date_of_Birth }}" class="form-control" id="dob"
                  placeholder="20 October, 1999">
              </div>

              <div class="form-group col-md-6">
                <label for="website">Website</label>
                <input type="text" name="Website" value="{{ $abouts->Website }}" class="form-control"
                  id="website" placeholder="https://enchongdeeveraofficial.github.io/">
              </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Save Changes">
          </form>
          <hr>
          <h4 ID="skillsection">Manage Skills</h4>
          @endforeach

          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Id</th>
                <th>Skill</th>
                <th>Skill Expertise</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($skills as $skill)
              <tr>
                <div class="modal fade" id="modal{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Edit Skill</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="skilleditbox">
                        <form action="{{ route('skills.update', $skill->id) }}" method="post" enctype="multipart/form-data">
                          @method('PUT')
                          @csrf
                          <input type="hidden" name="id" value="{{ $skill->id }}">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="website">Skill</label>
                              <input type="text" name="Skill_Name" value="{{ $skill->Skill_Name }}" class="form-control" id="website"
                                placeholder="PHP">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="website">Expertise</label>
                              <input type="text" name="Expertise_Level" value="{{ $skill->Expertise_Level }}" class="form-control" id="website"
                                placeholder="100">
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->Skill_Name }}</td>
                <td>{{ $skill->Expertise_Level }}%</td>
                <td>
                  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $skill->id }}">
                    Edit
                  </button> --}}
                   {{-- <a href="{{ route('skills.update', $skill->id) }}"><button type="button" class="btn btn-danger"
                      data-toggle="modal" data-target="#exampleModal">
                      Delete
                    </button></a> --}}
                    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $skill->id }}">
                        Edit
                      </button>
                      <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure you want to delete this user')">Delete</button>
                  </form>
                  </td>
              </tr>
            @endforeach

              <div class="pb-3 pt-3">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p style="text-align:center">{{ $message }}</p>
                  </div>
              @endif
              </div>
            </tbody>
          </table>
          <form action="{{ route('skills.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="sn">Skill Name</label>
                <input type="text" name="Skill_Name" class="form-control" id="website" placeholder="PHP" required>
              </div>
              <div class="form-group col-md-5">
                <label for="website">Expertise Level (Out of 100)</label>
                <input type="text" name="Expertise_Level" class="form-control" id="website" placeholder="100" required>
              </div>
              <div class="form-group col-md-2">
                <label class="text-white">submit</label>
                {{-- <input type="submit" class="btn btn-primary form-control"> --}}
                <button type="submit" class="btn btn-primary form-control">Submit</button>
              </div>

            </div>
          </form>
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