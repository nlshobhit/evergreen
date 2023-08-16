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
                        <h5 class="mb-0 text-info">Update Vendor</h5>
                    </div>
                    <hr/>
                    <form action="{{route('update.vendor')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$vendor_id->id}}" name="id">
                    <div class="row mb-3">
                        <label for="inputVendorName" class="col-sm-3 col-form-label">Vendor Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vendor_company_name" id="inputVendorName" value="{{$vendor_id->vendor_name}}" placeholder="Enter Vendor Company Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputdepartment" class="col-sm-3 col-form-label">Vendor Representative Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vendor_representative_name" id="inputdepartment" value="{{$vendor_id->vendor_representative_name}}" placeholder="Vendor Representative Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputdate" class="col-sm-3 col-form-label">Vendor Product</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vendor_product" id="inputdate" value="{{$vendor_id->vendor_product}}" placeholder="Vendor Product">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Vendor From</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vendor_from" id="inputNumber" value="{{$vendor_id->vendor_from}}" placeholder="Vendor From">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input  type="date" step="0.01" class="form-control" name="date" id="inputConfirmPassword2" value="{{$vendor_id->date}}" placeholder="Date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Vendor Address</label>
                        <div class="col-sm-9">
                            <input  type="text" step="0.01" class="form-control" name="vendor_address" id="inputConfirmPassword2" value="{{$vendor_id->vendor_address}}" placeholder="Vendor Addres">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Vendor Billing Details</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="vendor_billing_details" id="inputChoosePassword2" value="{{$vendor_id->vendor_billing_details}}" placeholder="Vendor Billing Details">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Others</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="others" id="inputChoosePassword2" value="{{$vendor_id->others}}" placeholder="Others">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Update Vendor</button>
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
