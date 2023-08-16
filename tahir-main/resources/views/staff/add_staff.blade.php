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
                        <h5 class="mb-0 text-info">Add Staff</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.staff')}}" method="POST">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputStaffName" class="col-sm-3 col-form-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="full_name" id="inputFullName" placeholder="Enter Full Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputdepartment" class="col-sm-3 col-form-label">Department</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="department" id="inputdepartment" placeholder="Department">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputdate" class="col-sm-3 col-form-label">Date of Joining</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="date_of_joining" id="inputdate" placeholder="Date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="mobile_number" id="inputNumber" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input  type="text" step="0.01" class="form-control" name="address" id="inputConfirmPassword2" placeholder="Address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Salary</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="salary" id="inputConfirmPassword2" placeholder="Enter Salary">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Shift Timing</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" name="shift_timing" id="inputChoosePassword2" placeholder="Shift Timing">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Add Incentive</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="add_incentive" id="inputChoosePassword2" placeholder="Add Percent">
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
