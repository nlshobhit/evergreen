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
                        <h5 class="mb-0 text-info">Add Item</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.item')}}" method="POST">
                        @csrf
                     <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Vendor Name</label>
                        <div class="col-md-9">
                            <select class="form-select mb-3" aria-label="Default select example" name="vendor_company_name">
                                <option selected="">Vendor Name</option>
                                @foreach ($product as $item)
                                <option value="{{$item->vendor_company_name}}">{{$item->vendor_company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Item Name</label>
                        <div class="col-sm-9">
                            <input  type="text" step="0.01" class="form-control" name="item_name" id="inputConfirmPassword2" placeholder="Enter Item Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Total Piece</label>
                        <div class="col-sm-9">
                            <input type="number" step="0.01" class="form-control" name="total_piece" id="inputTotalPiece" placeholder="Enter Total Piece">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPiece" class="col-sm-3 col-form-label">Per Piece Value</label>
                        <div class="col-sm-9">
                            <input type="number" step="0.01" class="form-control" name="per_piece_value" id="inputPieceAmount" placeholder="Enter Per Piece Value">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputAmount" class="col-sm-3 col-form-label">Total Amount</label>
                        <div class="col-sm-9">
                            <input type="number" step="0.01" class="form-control" name="total_amount" id="inputAmount" placeholder="Enter Total Amount" readonly>
                        </div>
                    </div>
                    <script>
                        const inputTotalPiece = document.getElementById("inputTotalPiece");
                        const inputPieceAmount = document.getElementById("inputPieceAmount");
                        const inputAmount = document.getElementById("inputAmount");

                        function updateAmount() {
                            const piece = parseFloat(inputTotalPiece.value);
                            const pieceAmount = parseFloat(inputPieceAmount.value);
                            const amount = piece * pieceAmount;

                            inputAmount.value = amount.toFixed(2);
                        }

                        inputTotalPiece.addEventListener("input", updateAmount);
                        inputPieceAmount.addEventListener("input", updateAmount);
                    </script>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Add Item</button>
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
