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
                        <h5 class="mb-0 text-info">Update Sale</h5>
                    </div>
                    <hr/>
                    <form action="{{route('update.sale')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$sale_id->id}}" name="id">
                    <div class="row mb-3">
                        <label for="inputFullfName" class="col-sm-3 col-form-label">Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customer_name" id="inputFullName" value="{{$sale_id->customer_name}}" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Customer Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="customer_number" id="inputNumber" value="{{$sale_id->customer_number}}" placeholder="Enter Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputlocation" class="col-sm-3 col-form-label">Customer Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customer_location" id="inputlocation" value="{{$sale_id->customer_location}}" placeholder="Enter location">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Product Details</label>
                        <div class="col-sm-9">
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name:</label>
                                <input type="text"  class="form-control" id="product_name" value="{{$sale_id->product_name}}" name="product_name">
                            </div>
                            <div class="mb-3">
                                <label for="no_of_pieces" class="form-label">Number Of Pieces:</label>
                                <input type="number" step="0.01" class="form-control" id="no_of_pieces" value="{{$sale_id->no_of_pieces}}" name="no_of_pieces">
                            </div>
                            <div class="mb-3">
                                <label for="cost" class="form-label">Cost:</label>
                                <input type="number" step="0.01" class="form-control" id="cost" value="{{$sale_id->cost}}" name="cost">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-3 col-form-label">Total Cost Price</label>
                        <div class="col-sm-9">
                           <input type="number" class="form-control" name="cost_price" id="inputCostPrice" value="{{$sale_id->cost_price}}" placeholder="Enter Amount" readonly>
                        </div>
                    </div>
                    <script>
                        const no_of_pieces = document.getElementById("no_of_pieces");
                        const cost = document.getElementById("cost");
                        const inputPrice = document.getElementById("inputCostPrice");

                        function updateTotal() {
                            const noPiece = parseFloat(no_of_pieces.value);
                            const pieceCost = parseFloat(cost.value);
                            const total = noPiece * pieceCost;

                            inputPrice.value = total.toFixed(2); // Display with 2 decimal places
                        }

                            no_of_pieces.addEventListener("input", updateTotal);
                            cost.addEventListener("input", updateTotal);
                </script>
                    <div class="row mb-3">
                    <label for="inputPrice" class="col-sm-3 col-form-label">Total Sold Price</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" name="sold_price" id="inputSoldPrice" value="{{$sale_id->sold_price}}" placeholder="Enter Amount">
                       </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPrice" class="col-sm-3 col-form-label">Profit And Loss</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" name="profit_loss" id="inputProfitLoss" value="{{$sale_id->profit_loss}}" placeholder="Calculated Amount" readonly>
                    </div>
                    </div>

                    <script>
                        const inputCostPrice = document.getElementById("inputCostPrice");
                        const inputSoldPrice = document.getElementById("inputSoldPrice");
                        const inputProfitLoss = document.getElementById("inputProfitLoss");

                    function updateProfitLoss() {
                        const costPrice = parseFloat(inputCostPrice.value);
                        const soldPrice = parseFloat(inputSoldPrice.value);
                        const profitLoss = soldPrice - costPrice;

                        inputProfitLoss.value = profitLoss.toFixed(2); // Display with 2 decimal places
                    }

                        inputCostPrice.addEventListener("input", updateProfitLoss);
                        inputSoldPrice.addEventListener("input", updateProfitLoss);
                    </script>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Advance Payment</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="advance_payment" id="inputNumber" value="{{$sale_id->advance_payment}}" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Pending Payment</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="pending_payment" id="inputNumber" value="{{$sale_id->pending_payment}}" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Seller Name</label>
                        <div class="col-sm-9">
                            {{-- <input type="text" class="form-control" name="full_name" id="inputName" value="{{$sale_id->full_name}}" placeholder="Enter Name"> --}}
                            <select class="form-select mb-3" aria-label="Default select example" value="{{$sale_id->full_name}}" name="full_name">
                                <option selected="">Staff Name</option>
                                @foreach ($data as $item)
                                <option value="{{$item->full_name}}">{{$item->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-3 col-form-label">Add Incentive (%)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="add_incentive" id="inputAddIncentive"  value="{{$sale_id->add_incentive}}" placeholder="Enter Percentage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-3 col-form-label">Percentage Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="percentage" id="inputPercentageAmount" value="{{$sale_id->percentage}}" placeholder="Calculated Amount" readonly>
                        </div>
                    </div>

                    <script>
                        const inputCPrice = document.getElementById("inputCostPrice");
                        const inputSPrice = document.getElementById("inputSoldPrice");
                        const inputAddIncentive = document.getElementById("inputAddIncentive");
                        const inputPercentageAmount = document.getElementById("inputPercentageAmount");

                        function updatePercentageAmount() {
                            const cPrice = parseFloat(inputCPrice.value);
                            const sPrice = parseFloat(inputSPrice.value);
                            const incentivePercentage = parseFloat(inputAddIncentive.value);

                            if (!isNaN(cPrice) && !isNaN(sPrice) && !isNaN(incentivePercentage)) {
                                const percentageAmount = (incentivePercentage / 100) * (sPrice - cPrice);

                                inputPercentageAmount.value = percentageAmount.toFixed(2); // Display with 2 decimal places
                                console.log("percentage is "+ percentageAmount);
                            } else {
                                inputPercentageAmount.value = "";
                            }
                        }

                        inputCPrice.addEventListener("input", updatePercentageAmount);
                        inputSPrice.addEventListener("input", updatePercentageAmount);
                        inputAddIncentive.addEventListener("input", updatePercentageAmount);

                    </script>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Update Sale</button>
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
