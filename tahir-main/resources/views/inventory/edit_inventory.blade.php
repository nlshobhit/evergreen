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
                        <h5 class="mb-0 text-info">Update Inventory</h5>
                    </div>
                    <hr/>
                    <form action="{{route('update.inventory')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$inventory_id->id}}" name="id">
                    <div class="row mb-3">
                        <label for="inputProductName" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_name" id="inputProductName" value="{{$inventory_id->product_name}}" placeholder="Enter Product Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputProductType" class="col-sm-3 col-form-label">Product Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_type" id="inputProductType" value="{{$inventory_id->product_type}}" placeholder="Product Type">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputManufacturer" class="col-sm-3 col-form-label">ManuFacturer</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="manufacturer" id="inputManufacturer" value="{{$inventory_id->manufacture}}" placeholder="Manufacturer">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputVendor" class="col-sm-3 col-form-label">Vendor Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="vendor_name" id="inputVendor" value="{{$inventory_id->vendor_name}}" placeholder="Vendor Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Number Of Pieces</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="no_of_pieces" id="inputConfirmPassword2" value="{{$inventory_id->no_of_pieces}}" placeholder="Enter Cost Pieces">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Product Dimension</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="product_dimension" id="inputConfirmPassword2" value="{{$inventory_id->product_dimension}}" placeholder="Enter Product Dimension">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Store Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="store_name" id="inputChoosePassword2" value="{{$inventory_id->store_name}}" placeholder="Store Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Per Piece Price</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="per_piece_price" id="inputConfirmPassword2" value="{{$inventory_id->per_piece_price}}" placeholder="Enter Per Piece Price">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Total Value</label>
                        <div class="col-sm-9">
                            <input  type="number" step="0.01" class="form-control" name="total_value" id="inputConfirmPassword2" value="{{$inventory_id->total_value}}" placeholder="Enter Total Value">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Update Inventory</button>
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
