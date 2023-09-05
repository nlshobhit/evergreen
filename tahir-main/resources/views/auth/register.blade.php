<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('backend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
    <title></title>
</head>

<body class="bg-login">
    @extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">Staff Login</h5>
                    </div>
                    <hr/>
                    <form class="row g-3" method="POST" action="{{ route('store.register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmailAddress" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" required
                                placeholder="Enter Your Name">
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" required
                                placeholder="Enetr your E-mail Address">
                        </div>
                        <div class="row mb-3">
                            <label for="inputChoosePassword" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name="password" class="form-control border-end-0" required
                                    id="password" value=""
                                    placeholder="Enter Password"> <a href="javascript:;"
                                    class="input-group-text bg-transparent"><i
                                        class='bx bx-hide'></i></a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputChoosePassword1" class="form-label" >Confirm Password</label>
                            <div class="input-group" id="show_hide_password1">
                                <input type="password" name="password_confirmation" class="form-control border-end-0" required
                                    id="password_confirmation" value=""
                                    placeholder="Enter Confirmation Password"> <a href="javascript:;"
                                    class="input-group-text bg-transparent"><i
                                        class='bx bx-hide'></i></a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Store Name</label>
                            <div class="col-sm-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="store_id" required>
                                    <option selected="">Store Name</option>
                                    @foreach ($data as $item)
                                    <option value="{{$item->id}}">{{$item->store_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputRole" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="role_id" required>
                                    <option selected="">Define Role</option>
                                    @foreach ($role as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info px-5">Add Staff</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->
@endsection

    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--Password show & hide js -->
    <script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
    $(document).ready(function() {
        $("#show_hide_password1 a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password1 input').attr("type") == "text") {
                $('#show_hide_password1 input').attr('type', 'password');
                $('#show_hide_password1 i').addClass("bx-hide");
                $('#show_hide_password1 i').removeClass("bx-show");
            } else if ($('#show_hide_password1 input').attr("type") == "password") {
                $('#show_hide_password1 input').attr('type', 'text');
                $('#show_hide_password1 i').removeClass("bx-hide");
                $('#show_hide_password1 i').addClass("bx-show");
            }
        });
    });
    </script>
    <!--app JS-->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>

</html>
