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
                        <h5 class="mb-0 text-info">Update Store</h5>
                    </div>
                    <hr/>
                    <form action="{{route('update.store')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$store_id->id}}" name="id">
                    <div class="row mb-3">
                        <label for="inputStaffName" class="col-sm-3 col-form-label">Store Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="store_name" id="inputFullName" value="{{$store_id->store_name}}" placeholder="Enter Store Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputdepartment" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="inputdepartment" value="{{$store_id->address}}" placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputdate" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="mobile_number" id="inputdate" value="{{$store_id->mobile_name}}" placeholder="Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Manager Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="manager_name" id="inputNumber" value="{{$store_id->manager_name}}" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Update Store</button>
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
