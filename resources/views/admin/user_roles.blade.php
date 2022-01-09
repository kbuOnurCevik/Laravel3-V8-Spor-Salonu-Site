<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/flaticon.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/barfiller.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{ asset('assets')}}/css/style.css" type="text/css">


<div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                    <tr>
                        <th><b>User Roles</b></th>
                    <tbody>
                    @include('home.message')
                    </tbody>
                    </tr>

                    <tr>
                        <th>Id</th>
                        <tbody>
                        <td>{{$data->id}}</td>
                        </tbody>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <tbody>
                        <td>{{$data->name}}</td>
                        </tbody>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <tbody>
                        <td>{{$data->email}}</td>
                        </tbody>
                    </tr>

                    <tr>
                        <th>Roles</th>
                        <tbody>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                               onclick="return confirm('Delete ! Are you sure?)"><img
                                                    src="{{asset('assets/admin/img')}}/delete.png" height="25"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                        </tbody>
                    </tr>


                    <tr>
                        <th>Add Role</th>
                        <tbody>
                        <td>
                            <form action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <select name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </form>
                        </td>
                        </tbody>
                    </tr>

                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
