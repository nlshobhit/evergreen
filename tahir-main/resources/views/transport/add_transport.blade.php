@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Add Transport</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.transport')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Select Payment Type</label>
                            <div class="col-md-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="transport_type">
                                    <option selected="">Select Payment Type</option>
                                    <option value="cash_on_delivery">Cash On Delivery</option>
                                    <option value="upi_payments">UPI Payments</option>
                                    <option value="netbanking">InterNet Banking</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Transport Amount</label>
                            <div class="col-sm-9">
                                <input  type="number" step="0.01" class="form-control" name="transport_amount" id="inputConfirmPassword2" placeholder="Enter Transport Amount">
                            </div>
                        </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Transport Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="transport_location" id="inputEnterYourName" placeholder="Enter Transport Location">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Transport Date</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Select Transport Product</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_name" id="inputEnterYourName" placeholder="Enter Transport Location">
                        </div>
                    </div>
                    <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Store Name</label>
                            <div class="col-sm-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="store_id">
                                    <option selected="">Store Name</option>
                                    @foreach ($data as $item)
                                    <option value="{{$item->id}}">{{$item->store_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Vehicle Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="vehicle_no" id="inputNumber" placeholder="Enter Vehicle Number">
                            </div>
                        </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary px-5">Add Transport</button>
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
