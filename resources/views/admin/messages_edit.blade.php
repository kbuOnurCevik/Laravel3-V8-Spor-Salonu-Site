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
                    <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <thead class="thead-light">
                        <tr>
                            <th><b>Message Detail</b></th>
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
                            <th>Phone</th>
                            <tbody>
                            <td>{{$data->phone}}</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <tbody>
                            <td>{{$data->subject}}</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <tbody>
                            <td>{{$data->message}}</td>
                            </tbody>
                        </tr>
                        <tr>
                            <th>Admin Note</th>
                            <tbody>
                            <td><textarea
                                   id="note" name="note">{{$data->note}}</textarea></td>
                            </tbody>
                        </tr>
                        <tr>

                                <tbody>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update Message</button>
                                </td>
                                </tbody>

                        </tr>
                        </thead>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
