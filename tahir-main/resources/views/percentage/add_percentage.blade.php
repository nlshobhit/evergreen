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
                        <h5 class="mb-0 text-info">Add Percentage</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.percentage')}}" method="POST">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="inputEnterYourName" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Percentage</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="percentage" id="inputConfirmPassword2" placeholder="Enter Percentage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Select Product</label>
                        <div class="col-md-9">
                            <select class="form-select mb-3" aria-label="Default select example" name="product_name">
                                <option selected="">Select Product</option>
                                @foreach ($product as $item)
                                <option value="{{$item->product_name}}">{{$item->product_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Add Percentage</button>
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
