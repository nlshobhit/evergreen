@extends('admin.master')
@section('content')
@php
 $totla_sale = App\Models\Sale::get()->count();
 $totla_transport = App\Models\Transport::get()->count();
 $totla_sreturn = App\Models\Returnsale::get()->count();
 $totla_expense = App\Models\Expense::get();
 $totla_inventory = App\Models\Inventory::get()->count();
 $totla_staff = App\Models\Staff::get()->count();
 $totla_vendor = App\Models\Vendor::get()->count();
 $totla_store = App\Models\Store::get()->count();
 $total_amount = $totla_expense->sum('expense_amount');
@endphp
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
        <div class="card radius-10 bg-gradient-deepblue">
         <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_sale}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-cart fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Sale</p>
                {{-- <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
            </div>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-orange">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_transport}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-dollar fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Transport</p>
                {{-- <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
            </div>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-ohhappiness">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_sreturn}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-group fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Return Product</p>
                {{-- <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
            </div>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-ibiza">
         <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$total_amount}} Rs</h5>
                <div class="ms-auto">
                    <i class='bx bx-envelope fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Expense</p>
                <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
            </div>
        </div>
     </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-ohhappiness">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_inventory}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-box fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Inventory</p>
            </div>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-ohhappiness">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_staff}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-user fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Staff</p>
            </div>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-ohhappiness">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_vendor}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-user fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Vendor</p>
            </div>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card radius-10 bg-gradient-ohhappiness">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$totla_store}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-store fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">Total Store</p>
            </div>
        </div>
    </div>
    </div>
</div><!--end row-->
@endsection
