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
                        <h5 class="mb-0 text-info">Add Inventory</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.inventory')}}" method="POST">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputProductName" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_name" id="inputProductName" placeholder="Enter Product Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputProductType" class="col-sm-3 col-form-label">Product Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_type" id="inputProductType" placeholder="Product Type">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputManufacturer" class="col-sm-3 col-form-label">ManuFacturer</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="manufacturer" id="inputManufacturer" placeholder="Manufacturer">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputVendor" class="col-sm-3 col-form-label">Vendor Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vendor_name" id="inputVendor" placeholder="Vendor Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Number Of Pieces</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="no_of_pieces" id="inputConfirmPassword2" placeholder="Enter Cost Pieces">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Product Dimension</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="product_dimension" id="inputConfirmPassword2" placeholder="Enter Product Dimension">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Store Name</label>
                        <div class="col-sm-9">
                            {{-- <input type="text" class="form-control" name="store_name" id="inputChoosePassword2" placeholder="Store Name"> --}}
                            <select class="form-select mb-3" aria-label="Default select example" name="store_name">
                                <option selected="">Store Name</option>
                                @foreach ($data as $item)
                                <option value="{{$item->store_name}}">{{$item->store_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Per Piece Price</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="per_piece_price" id="inputConfirmPassword2" placeholder="Enter Per Piece Price">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Total Value</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="total_value" id="inputConfirmPassword2" placeholder="Enter Total Value">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Add Inventory</button>
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
