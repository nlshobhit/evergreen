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
                        <h5 class="mb-0 text-info">Add Sale</h5>
                    </div>
                    <hr/>
                    <form action="{{route('store.sale')}}" method="POST">
                        @csrf
                    <div class="row mb-3">
                        <label for="inputFullfName" class="col-sm-3 col-form-label">Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customer_name" id="inputFullName" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Customer Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="customer_number" id="inputNumber" placeholder="Enter Number">
                        </div>
                      </div>
                    <div class="row mb-3">
                        <label for="inputlocation" class="col-sm-3 col-form-label">Customer Location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customer_location" id="inputlocation" placeholder="Enter location">
                        </div>
                    </div>
                    <div class="row mb-3">
                         <label class="col-sm-3 col-form-label">Product Details</label>
                         <table id="emptbl">
                         <tr>
                            <th>Product Name</th>
                            <th>Number of Pieces</th>
                            <th>Cost</th>
                        </tr>
                            <tr id="rowTemplate" style="display: none;">
                            <td><input type="text" name="product_name[]" value="" /></td>
                            <td><input type="number" name="no_of_pieces[]" value="" /></td>
                            <td><input type="number" name="cost[]" value="" /></td>
                         </tr>
                        </table>
                        <table>
                         <tr>
                         <td><input type="button" value="Add Row" onclick="addRows()" /></td>
                         </tr>
                        </table>
                        </div>
                        <script>
                            function addRows(){
                                 var table = document.getElementById('emptbl');
                                 var rowTemplate = document.getElementById('rowTemplate');
                                 var newRow = rowTemplate.cloneNode(true);

                                 newRow.style.display = '';
                                 table.appendChild(newRow);
                         }
                         </script>
                        <div class="row mb-3">
                            <label for="inputPrice" class="col-sm-3 col-form-label">Total Cost Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="cost_price" id="inputCostPrice" placeholder="Enter Amount">
                                </div>
                            </div>
                        {{-- <script>
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
                        </script> --}}

                <div class="row mb-3">
                <label for="inputPrice" class="col-sm-3 col-form-label">Total Sold Price</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="sold_price" id="inputSoldPrice" placeholder="Enter Amount">
                   </div>
                </div>
                <div class="row mb-3">
                <label for="inputPrice" class="col-sm-3 col-form-label">Profit And Loss</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="profit_loss" id="inputProfitLoss" placeholder="Calculated Amount" readonly>
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
                            <input type="number" class="form-control" name="advance_payment" id="inputAdvanceNumber" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Pending Payment</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="pending_payment" id="inputPendingNumber" placeholder="Enter Amount">
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
                                <select class="form-select" name="full_name[]" id="full_name" >
                                <option selected="">Seller Name</option>
                                @foreach ($staff as $item)
                                    <option value="{{$item->full_name}}">{{$item->full_name}}</option>
                                @endforeach
                                </select>
                            </td>
                                <td class="col1"><input type="number" name="add_incentive[]" class="inputAddIncentive" value="" /></td>
                                <td class="col2"><input type="number" name="percentage[]" class="inputPercentageAmount" value="" readonly></td>
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


                    {{-- <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Seller Name</label>
                        <div class="col-sm-9">

                            <select class="form-select mb-3" aria-label="Default select example" name="full_name">
                                <option selected="">Seller Name</option>
                                @foreach ($staff as $item)
                                    <option value="{{$item->full_name}}">{{$item->full_name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-3 col-form-label">Add Incentive (%)</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="add_incentive" id="inputAddIncentive" placeholder="Enter Percentage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPrice" class="col-sm-3 col-form-label">Percentage Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="percentage" id="inputPercentageAmount" placeholder="Calculated Amount" readonly>
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

                    </script> --}}

                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info px-5">Add Sale</button>
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
