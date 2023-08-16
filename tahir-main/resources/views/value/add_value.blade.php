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
                        <h5 class="mb-0 text-info">Payment Details</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.value')}}" method="POST">
                        @csrf
                     <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Vendor Name</label>
                        <div class="col-md-9">
                            <select class="form-select mb-3" aria-label="Default select example" name="vendor_company_name">
                                <option selected="">Vendor Name</option>
                                @foreach ($name as $item)
                                <option value="{{$item->vendor_company_name}}">{{$item->vendor_company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Total Due</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="total_due" id="inputConfirmPassword2" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Total Advance Paid</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="total_advance_paid" id="inputConfirmPassword2" placeholder="Enter Total Advance">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Total Due From Vendor </label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="total_due_from_vendor" id="inputConfirmPassword2" placeholder="Enter Dye Amount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Adjustment</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="adjustment" id="inputConfirmPassword2" placeholder="Enter Adjustment Amount">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Payment</button>
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
