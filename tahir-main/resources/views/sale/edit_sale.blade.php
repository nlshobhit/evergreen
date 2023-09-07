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
                        <h5 class="mb-0 text-info">Edit Sale</h5>
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
                        <table id="productTable">
                            <tr>
                                <th>Product Name</th>
                                <th>Number of Pieces</th>
                                <th>Cost</th>
                            </tr>
                            <tr id="rowTemplate" style="display: none;">
                                <td><input type="text" name="product_name[]" value="{{$sale_id->product_name[0]}}" /></td>
                                <td><input type="number" name="no_of_pieces[]" value="{{$sale_id->no_of_pieces[0]}}" onchange="updateTotalCost()" /></td>
                                <td><input type="number" name="cost[]" value="{{$sale_id->cost[0]}}" onchange="updateTotalCost()" /></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td><input type="button" value="Add Row" onclick="addRow()" /></td>
                            </tr>
                        </table>
                    </div>

                    <script>
                        function addRow() {
                            var table = document.getElementById('productTable');
                            var rowTemplate = document.getElementById('rowTemplate');
                            var newRow = rowTemplate.cloneNode(true);

                            newRow.style.display = '';
                            table.appendChild(newRow);
                        }

                        function updateTotalCost() {
                            var totalCost = 0;
                            var rows = document.querySelectorAll('#productTable tr[id^="rowTemplate"]');

                            rows.forEach(function(row) {
                                var piecesInput = row.querySelector('input[name^="no_of_pieces"]');
                                var costInput = row.querySelector('input[name^="cost"]');
                                var pieces = parseFloat(piecesInput.value);
                                var cost = parseFloat(costInput.value);

                                if (!isNaN(pieces) && !isNaN(cost)) {
                                    totalCost += pieces * cost;
                                }
                            });

                            document.getElementById('inputCostPrice').value = totalCost;
                        }
                    </script>

                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-3 col-form-label">Total Cost Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="cost_price" id="inputCostPrice" value="{{$sale_id->cost_price}}" placeholder="Enter Amount" readonly>
                        </div>
                    </div>

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

                        inputProfitLoss.value = profitLoss.toFixed(2);
                        }

                        inputCostPrice.addEventListener("input", updateProfitLoss);
                        inputSoldPrice.addEventListener("input", updateProfitLoss);

                        </script>
                        <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Advance Payment</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="advance_payment" id="inputAdvanceNumber" value="{{$sale_id->advance_payment}}" placeholder="Enter Amount">
                        </div>
                        </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Pending Payment</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="pending_payment" id="inputPendingNumber" value="{{$sale_id->pending_payment}}" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Seller Details</label>

                        <table id="sales">
                         <tr>
                            <th>Seller Name</th>
                            <th>Add Incentive (%)</th>
                            <th>Percentage Amount</th>
                         </tr>
                         <tr>
                            <td class="col0">
                                <select class="form-select" name="full_name[]" value="{{$sale_id->full_name[0]}}" id="full_name" >
                                <option selected="">Seller Name</option>
                                @foreach ($staff as $item)
                                    <option value="{{$item->full_name}}">{{$item->full_name}}</option>
                                @endforeach
                                </select>
                            </td>
                                <td class="col1"><input type="number" name="add_incentive[]" class="inputAddIncentive" value="{{$sale_id->add_incentive[0]}}" /></td>
                                <td class="col2"><input type="number" name="percentage[]" class="inputPercentageAmount" value="{{$sale_id->percentage[0]}}" readonly></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                               <td><input type="button" value="Add Staff" onclick="addstaff()" /></td>
                            </tr>
                        </table>
                        </div>
                        <script>
                        function attachEventListenersToRow(row) {
                            const inputAddIncentive = row.querySelector(".inputAddIncentive");
                            const inputCPrice = document.getElementById("inputCostPrice");
                            const inputSPrice = document.getElementById("inputSoldPrice");
                            const inputPercentageAmount = row.querySelector(".inputPercentageAmount");

                            inputAddIncentive.addEventListener("input", function () {
                            const cPrice = parseFloat(inputCPrice.value);
                            const sPrice = parseFloat(inputSPrice.value);
                            const incentivePercentage = parseFloat(inputAddIncentive.value);

                        if (!isNaN(cPrice) && !isNaN(sPrice) && !isNaN(incentivePercentage)) {
                            const percentageAmount = (incentivePercentage / 100) * (sPrice - cPrice);
                            inputPercentageAmount.value = percentageAmount.toFixed(2);
                            console.log("percentageAmount");
                         } else {
                            inputPercentageAmount.value = "";
                          }
                         });
                        }

                        function addstaff() {
                            var table1 = document.getElementById('sales');
                            var rowCount1 = table1.rows.length;
                            var cellCount1 = table1.rows[0].cells.length;
                            var row1 = table1.insertRow(rowCount1);
                            for (var i = 0; i < cellCount1; i++) {
                                var cell1 = row1.insertCell(i);
                                var copycell1 = document.querySelector('.col' + i).innerHTML;
                                cell1.innerHTML = copycell1;
                            }
                                attachEventListenersToRow(row1);
                        }
                        document.addEventListener("DOMContentLoaded", function () {
                        const existingRows = document.querySelectorAll("#sales tr");
                        for (const row of existingRows) {
                                if (row.querySelector(".inputAddIncentive") && row.querySelector(".inputPercentageAmount")) {
                                    attachEventListenersToRow(row);
                                    }
                                }
                        });
                        </script>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Store Name</label>
                        <div class="col-sm-9">
                            <select class="form-select mb-3" aria-label="Default select example" value="{{$sale_id->store_id}}" name="store_id">
                                <option selected="">Store Name</option>
                                @foreach ($data as $item)
                                <option value="{{$item->id}}">{{$item->store_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
