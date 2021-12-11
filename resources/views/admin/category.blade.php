@extends('layouts.admin')

@section('title','Category List')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item">Category</li>
            </ol>
        </div>

        <div class="text-left">
            <a class="btn btn-info mb-1" href="{{route('admin_category_add')}}">Add Category</a>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                            <tr>
                                <th style="cursor: pointer">Id</th>
                                <th style="cursor: pointer">Parent</th>
                                <th style="cursor: pointer">Title</th>
                                <th style="cursor: pointer">Status</th>
                                <th style="cursor: pointer">Edit</th>
                                <th style="cursor: pointer">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->parent_id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Edit</a></td>
                                <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Deleting ! Are you sure?')">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!---Container Fluid-->
@endsection

@section('footer')

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection
