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
                    <form action="{{route('store.stafflogin')}}" method="POST">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Login Id</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="user_id" id="inputEnterYourName" placeholder="Enter Login Id">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input  type="password" step="0.01" class="form-control" name="password" id="inputConfirmPassword2" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Add Details</button>
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
