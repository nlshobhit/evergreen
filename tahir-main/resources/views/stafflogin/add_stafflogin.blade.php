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
                        <h5 class="mb-0 text-info">Add Details</h5>
                    </div>
                    <hr/>
                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enetr your E-mail Address">
                        </div>
                        <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name="password" class="form-control border-end-0"
                                    id="password" value=""
                                    placeholder="Enter Password"> <a href="javascript:;"
                                    class="input-group-text bg-transparent"><i
                                        class='bx bx-hide'></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputChoosePassword1" class="form-label">Confirm Password</label>
                            <div class="input-group" id="show_hide_password1">
                                <input type="password" name="password_confirmation" class="form-control border-end-0"
                                    id="password_confirmation" value=""
                                    placeholder="Enter Confirmation Password"> <a href="javascript:;"
                                    class="input-group-text bg-transparent"><i
                                        class='bx bx-hide'></i></a>
                            </div>
                        </div>
                        <div class="row">
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
