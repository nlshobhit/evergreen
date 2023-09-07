@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card border-top border-0 border-4 border-danger">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                        </div>
                        <h5 class="mb-0 text-danger">Edit Return Product</h5>
                    </div>
                    <hr/>
                    <form action="{{route('update.return.product')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$returnData->id}}">
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Select Return Product</label>
                            <div class="col-md-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="product_name">
                                    <option selected="">Select Transport Product</option>
                                    @foreach ($data as $item)
                                    <option value="{{$item->product_name}}">{{$item->product_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Return Amount</label>
                            <div class="col-sm-9">
                                <input  type="number" step="0.01" class="form-control" name="return_amount" value="{{$returnData->return_amount}}" id="inputConfirmPassword2" placeholder="Enter Transport Amount">
                            </div>
                        </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Return Reason</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="inputAddress4" name="return_reason" rows="3" placeholder="Describe The Reason">{{$returnData->return_reason}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Return Date</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="return_date" value="{{$returnData->return_date}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Store Name</label>
                        <div class="col-sm-9">
                            <select class="form-select mb-3" aria-label="Default select example" value="{{$returnData->store_id}}" name="store_id">
                                <option selected value="">{{$returnData->store_name}}</option>
                                <option >Store Name</option>
                                @foreach ($store as $item)
                                <option value="{{$item->id}}">{{$item->store_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-danger px-5">Edit Return Product</button>
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
