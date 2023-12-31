@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card border-top border-0 border-4 border-secondary">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-secondary"></i>
                        </div>
                        <h5 class="mb-0 text-secondary">Edit Expense</h5>
                    </div>
                    <hr/>
                    <form action="{{route('update.expense')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$expenseData->id}}">
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Select Expense</label>
                            <div class="col-md-9">
                                <select class="form-select mb-3" aria-label="Default select example" name="expense_type">
                                    <option selected="">Select Expense</option>
                                    <option value="Office Expense">Office Expense</option>
                                    <option value="Transport Expense">Transport Expense</option>
                                    <option value="Salary Expense">Salary Expense</option>
                                    <option value="Other Expense">Other Expense</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Expense Amount</label>
                            <div class="col-sm-9">
                                <input  type="number" step="0.01" class="form-control" value="{{$expenseData->expense_amount}}" name="expense_amount" id="inputConfirmPassword2" placeholder="Enter Transport Amount">
                            </div>
                        </div>
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Expense Date</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="date" value="{{$expenseData->date}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Store Name</label>
                        <div class="col-sm-9">
                            <select class="form-select mb-3" aria-label="Default select example" value="{{$expenseData->store_id}}" name="store_id">
                            <option selected value="">{{$expenseData->store_name}}</option>
                            {{-- <option>Store Name</option>
                                @foreach ($data as $item)
                                <option  value="{{$item->id}}">{{$item->store_name}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-secondary px-5">Edit Expense</button>
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
