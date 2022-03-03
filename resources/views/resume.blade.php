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
                    <h1 class="m-0">Edit Resume Section</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Resume</li>
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
                    <form action="{{ route('resume.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Select Category</label>
                                <select name="Category" class="custom-select">
                                    <option value="Education" selected>Education</option>
                                    <option value="Pofessional Experience">Pofessional Experience</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="sn">Course/Position Name</label>
                                <input type="text" name="Course_Position" class="form-control" id="website"
                                    placeholder="Bachelor of Information Technology" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="website">Institute or Company Name</label>
                                <input type="text" name="Institute" class="form-control" id="website"
                                    placeholder="Freelancer" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="website">Duration or Time Period</label>
                                <input type="text" name="Duration" class="form-control" id="website" placeholder="2018-2021"
                                    required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Description (leave blank if you dont want
                                    to)</label>
                                <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive towards. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness."></textarea>
                            </div>
                            <div class="form-group col-md-2 ml-auto">
                                <!--     <label class="text-white">submi</label>-->
                                <input type="submit" class="btn btn-primary form-control"
                                    value="Add To Resume">
                            </div>

                        </div>
                    </form>
                    
                    <table id="rlist" class="table table-striped table-sm .table-responsive ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Course/Position</th>
                                <th>Duration</th>
                                <th>Institution/Company</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($resumes as $resume)
                        <tbody>
                            <tr>
                                <div class="modal fade" id="modal{{ $resume->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalLabel">Edit</h6>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="skilleditbox">
                                                <form action="{{ route('resume.update', $resume->id) }}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="id" value="7">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label>Select Category</label>
                                                            <select name="Category" class="custom-select" >
                                                                <option value="{{ $resume->id }}" selected>{{ $resume->Category }}</option>
                                                                <option value="Education" selected>Education</option>
                                                                <option value="Pofessional Experience">Pofessional Experience</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <label for="sn">Course/Position Name</label>
                                                            <input type="text" name="Course_Position" value="{{ $resume->Course_Position }}"
                                                                class="form-control" id="website"
                                                                placeholder="Bachelor of Information Technology"
                                                                required>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <label for="website">Institute or Company Name</label>
                                                            <input type="text" name="Institute"
                                                                value="{{ $resume->Institute }}" class="form-control"
                                                                id="website" placeholder="Freelancer" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="website">Duration or Time Period</label>
                                                            <input type="text" name="Duration" value="{{ $resume->Duration }}"
                                                                class="form-control" id="website"
                                                                placeholder="2018-2021" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="exampleFormControlTextarea1">Description (leave
                                                                blank if you dont want to)</label>
                                                            <textarea class="form-control" name="Description"
                                                                id="exampleFormControlTextarea1" rows="3"
                                                                placeholder="I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive towards. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness.">{{ $resume->Description }}</textarea>
                                                        </div>


                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" name="rupdate"
                                                            value="Update">

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <td>{{ $resume->id }}</td>
                                    <td>{{ $resume->Category }}</td>
                                    <td>{{ $resume->Course_Position }}</td>
                                    <td>{{ $resume->Duration }}</td>
                                    <td>{{ $resume->Institute }}</td>

                                    <td>
                                        <form action="{{ route('resume.update', $resume->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modal{{ $resume->id }}">
                                            Edit
                                        </button>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete this user')">Delete</button>
                                        </form>
                                    </td>
                            </tr>
                            
                            
                        </tbody>
                        @endforeach
                    </table>
                    
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