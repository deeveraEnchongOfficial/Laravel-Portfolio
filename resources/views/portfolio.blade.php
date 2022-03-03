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
                    <h1 class="m-0">Edit Portfolio Section</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Portfolio</li>
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
                    <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
                                <div class="custom-file">
                                    <input type="file" name="Project_Screenshot" class="custom-file-input"
                                        id="profilepic">
                                    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mt-auto">
                                <label for="name">Project Name</label>
                                <input type="name" name="Project_Name" class="form-control" id="name"
                                    placeholder="ToDo List Maker">
                            </div>



                            <div class="form-group col-md-12">
                                <label for="email">Project Link</label>
                                <input type="text" name="Project_Link" class="form-control" id="email"
                                    placeholder="https://enchongdeeveraofficial.github.io/">
                            </div>
                            <div class="form-group col-md-2 ml-auto">
                                <input type="submit" class="btn btn-primary" value="Add To Portfolio">
                            </div>

                    </form>
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                {{-- <th>Id</th> --}}
                                <th>Project Image</th>
                                <th>Project Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $portfolio)
                            <tr>
                                <div class="modal fade" id="modal{{ $portfolio->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $portfolio->id }}">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <img src="image/Portfolio/{{ $portfolio->Project_Screenshot }}" class="oo img-thumbnail">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Project Screenshot/Image (Minimum 600px X 600px,
                                                                Maxsize 2mb)</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="Project_Screenshot"
                                                                    class="custom-file-input" id="profilepic">
                                                                <label class="custom-file-label" for="projectpic">Choose
                                                                    Pic...</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-6 mt-auto">
                                                            <label for="name">Project Name</label>
                                                            <input type="name" name="Project_Name" value="{{ $portfolio->Project_Name }}"
                                                                class="form-control" id="name"
                                                                placeholder="ToDo List Maker">
                                                        </div>



                                                        <div class="form-group col-md-12">
                                                            <label for="email">Project Link</label>
                                                            <input type="text" name="Project_Link" value="{{ $portfolio->Project_Link }}"
                                                                class="form-control" id="email"
                                                                placeholder="https://enchongdeeveraofficial.github.io/">
                                                        </div>

                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" name="pupdate"
                                                            value="Update">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- <td>{{ $portfolio->id }}</td> --}}
                                <td><img src="image/Portfolio/{{ $portfolio->Project_Screenshot }}" class="oo img-thumbnail" width="200"
                                        height="240.56"></td>
                                <td>{{ $portfolio->Project_Name }}</td>
                                <td>
                            
                                    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ $portfolio->Project_Link }}"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal{{ $portfolio->id }}">
                                        Edit
                                    </button> 
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete this user')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach




                        </tbody>
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