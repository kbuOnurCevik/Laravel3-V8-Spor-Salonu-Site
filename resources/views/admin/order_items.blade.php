<html>
<head>

    <link href="{{asset('assets')}}/admin/img/logo/logo.png" rel="icon">
    <title>Order Detail</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>
<body>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Order Detail</h1>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                @include('home.message')
                <form action="{{route('admin_order_update',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="form-group table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Member Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Member Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Member Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{$data->total}}</td>
                            </tr>
                            <tr>
                                <th>IP</th>
                                <td>{{$data->IP}}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><select class="form-control select2" name="status" style="width: 100%;">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>Completed</option>
                                        <option>Canceled</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <th>Admin Note</th>
                                <td><textarea name="note" rows="3" cols="30">{{$data->note}}</textarea></td>
                            </tr>


                            <tr>
                                <th>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                </td>
                                </th>
                            </tr>

                            </thead>
                        </table>


                        <div class="table-responsive p-3">
                            <h1 class="h3 mb-0 text-gray-800">Packet Details</h1><br>
                            <table class="table align-items-center table-flush" id="dataTable">
                                <thead class="thead-light">

                                <tr>
                                    <th>Packet Name</th>
                                    <th>Start Date</th>
                                    <th>Finish Date</th>
                                    <th>Months</th>
                                    <th>Price</th>


                                </tr>
                                </thead>
                                @foreach($datalist as $rs)
                                    <tbody>
                                    <td>{{$rs->product->title}}</td>
                                    <td>{{$rs->startdate}}</td>
                                    <td>{{$rs->finishdate}}</td>
                                    <td>{{$rs->months}}</td>
                                    <td>{{$rs->price}}₺</td>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
</div>
<!---Container Fluid-->

</body>
</html>
