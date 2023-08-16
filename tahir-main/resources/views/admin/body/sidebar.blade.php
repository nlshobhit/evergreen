<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon"> --}}
        </div>
        <div>
            <h6 class="logo-text text-success" style="font-size: 19px !important">Evergreen Furniture</h6>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Sale</div>
            </a>
            <ul>
                <li> <a href="{{route('add.sale')}}"><i class="bx bx-right-arrow-alt"></i>Create Sale</a>
                </li>
                <li> <a href="{{route('all.sale')}}"><i class="bx bx-right-arrow-alt"></i>All Sale</a>
                </li>
                <li> <a href="{{route('add.percentage')}}"><i class="bx bx-right-arrow-alt"></i>Add Percentage</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-car'></i>
                </div>
                <div class="menu-title">Transport</div>
            </a>
            <ul>
                <li> <a href="{{route('add.transport')}}"><i class="bx bx-right-arrow-alt"></i>Add Transport</a>
                </li>
                <li> <a href="{{route('all.transport')}}"><i class="bx bx-right-arrow-alt"></i>All Transport</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Return Product</div>
            </a>
            <ul>
                <li> <a href="{{route('add.return.product')}}"><i class="bx bx-right-arrow-alt"></i>Create Return</a>
                </li>
                <li> <a href="{{route('all.return.product')}}"><i class="bx bx-right-arrow-alt"></i>All Returns</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                </div>
                <div class="menu-title">Expenses</div>
            </a>
            <ul>
                <li> <a href="{{route('add.expense')}}"><i class="bx bx-right-arrow-alt"></i>Add Expense</a>
                </li>
                <li> <a href="{{route('all.expense')}}"><i class="bx bx-right-arrow-alt"></i>All Expenses</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Attendence</div>
            </a>
            <ul>
                <li> <a href="{{route('add.attendence')}}"><i class="bx bx-right-arrow-alt"></i>Add Attendence</a>
                </li>
                <li> <a href="{{route('all.attendence')}}"><i class="bx bx-right-arrow-alt"></i>All Attendence Report</a>
                </li>
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-box"></i>
                </div>
                <div class="menu-title">Inventory</div>
            </a>
            <ul>
                <li> <a href="{{route('add.inventory')}}"><i class="bx bx-right-arrow-alt"></i>Add Inventory</a>
                </li>
                <li> <a href="{{route('all.inventory')}}"><i class="bx bx-right-arrow-alt"></i>Check And Edit Inventory</a>
                </li>
            </ul>
        </li>



        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Staff</div>
            </a>
            <ul>
                <li> <a href="{{route('add.staff')}}"><i class="bx bx-right-arrow-alt"></i>Add Staff</a>
                </li>
                <li> <a href="{{route('all.staff')}}"><i class="bx bx-right-arrow-alt"></i>Check And Edit Staff</a>
                </li>
                <li> <a href="{{route('add.stafflogin')}}"><i class="bx bx-right-arrow-alt"></i>Create Staff Login</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Vendor</div>
            </a>
            <ul>
                <li> <a href="{{route('add.vendor')}}"><i class="bx bx-right-arrow-alt"></i>Add Vendor</a>
                </li>
                <li> <a href="{{route('add.item')}}"><i class="bx bx-right-arrow-alt"></i>Vendor Supply</a>
                </li>
                <li> <a href="{{route('add.value')}}"><i class="bx bx-right-arrow-alt"></i>Payment's Add/View</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-store"></i>
                </div>
                <div class="menu-title">Store</div>
            </a>
            <ul>
                <li> <a href="{{route('add.store')}}"><i class="bx bx-right-arrow-alt"></i>Add Store</a>
                </li>
                <li> <a href="{{route('all.store')}}"><i class="bx bx-right-arrow-alt"></i>View Store</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-store"></i>
                </div>
                <div class="menu-title">Reports</div>
            </a>
            <ul>
                <li> <a href="{{route('all.sale')}}"><i class="bx bx-right-arrow-alt"></i>Sales</a>
                </li>
                <li> <a href="{{route('all.return.product')}}"><i class="bx bx-right-arrow-alt"></i>Returns</a>
                </li>
                <li> <a href="{{route('all.transport')}}"><i class="bx bx-right-arrow-alt"></i>Transport</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Incentive</a>
                </li>
                <li> <a href="{{route('all.attendence')}}"><i class="bx bx-right-arrow-alt"></i>Attendence</a>
                </li>
                <li> <a href="{{route('all.expense')}}"><i class="bx bx-right-arrow-alt"></i>Expenses</a>
                </li>
            </ul>
        </li>


        {{-- <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Employee</div>
            </a>
            <ul>
                <li> <a href="{{route('add.expense')}}"><i class="bx bx-right-arrow-alt"></i>Add Employee</a>
                </li>
                <li> <a href="{{route('all.expense')}}"><i class="bx bx-right-arrow-alt"></i>All Employee</a>
                </li>
            </ul>
        </li> --}}
    </ul>
    <!--end navigation-->
</div>
