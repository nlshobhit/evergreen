<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PercentageController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\StaffLoginController;
use App\Http\Controllers\ValueController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\StoreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::controller(SaleController::class)->group(function(){
        Route::get('/all/sale','AllSale')->name('all.sale');
        Route::get('/add/sale','AddSale')->name('add.sale');
        Route::post('/store/sale','StoreSale1')->name('store.sale');
        Route::get('/edit/sale/{id}','EditSale')->name('edit.sale');
        Route::post('/update/sale','UpdateSale')->name('update.sale');
        Route::get('/delete/sale/{id}','DeleteSale')->name('delete.sale');
    });

    Route::controller(PercentageController::class)->group(function(){
        Route::get('/add/percentage','AddPercentage')->name('add.percentage');
        Route::post('/store/percentage','StorePercentage')->name('store.percentage');
    });

    Route::controller(TransportController::class)->group(function(){
        Route::get('/all/transport','AllTransport')->name('all.transport');
        Route::get('/add/transport','AddTransport')->name('add.transport');
        Route::post('/store/transport','StoreTransport')->name('store.transport');
        Route::get('/edit/transport/{id}','EditTransport')->name('edit.transport');
        Route::post('/update/transport','UpdateTransport')->name('update.transport');
        Route::get('/delete/transport/{id}','DeleteTransport')->name('delete.transport');
    });

    Route::controller(AttendenceController::class)->group(function(){
        Route::get('/add/attendence','AddAttendence')->name('add.attendence');
        Route::get('/all/attendence','AllAttendence')->name('all.attendence');
        Route::post('/store/attendence','StoreAttendence')->name('store.attendence');
        Route::get('/edit/attendence','EditAttendence')->name('edit.attendence');
        Route::post('/update/attendence','UpdateAttendence')->name('update.attendence');
        Route::get('/delete/attendence/{id}','DeleteAttendence')->name('delete.attendence');

    });

    Route::controller(ReturnController::class)->group(function(){
        Route::get('/all/return/product','AllReturnProduct')->name('all.return.product');
        Route::get('/add/return/product','AddReturnProduct')->name('add.return.product');
        Route::post('/store/return/product','StoreReturnProduct')->name('store.return.product');
        Route::get('/edit/return/product/{id}','EditReturnProduct')->name('edit.return.product');
        Route::post('/update/return/product','UpdateReturnProduct')->name('update.return.product');
        Route::get('/delete/return/product/{id}','DeleteReturnProduct')->name('delete.return.product');
    });

    Route::controller(ExpenseController::class)->group(function(){
        Route::get('/all/expense','AllExpense')->name('all.expense');
        Route::get('/add/expense','AddExpense')->name('add.expense');
        Route::post('/store/expense','StoreExpense')->name('store.expense');
        Route::get('/edit/expense/{id}','EditExpense')->name('edit.expense');
        Route::post('/update/expense','UpdateExpense')->name('update.expense');
        Route::get('/delete/expense/{id}','DeleteExpense')->name('delete.expense');
    });

    Route::controller(InventoryController::class)->group(function(){
        Route::get('/all/inventory','AllInventory')->name('all.inventory');
        Route::get('/add/inventory','AddInventory')->name('add.inventory');
        Route::post('/store/inventory','StoreInventory')->name('store.inventory');
        Route::get('/edit/inventory/{id}','EditInventory')->name('edit.inventory');
        Route::post('/update/inventory','UpdateInventory')->name('update.inventory');
        Route::get('/delete/inventory/{id}','DeleteInventory')->name('delete.inventory');
    });

    Route::controller(StaffController::class)->group(function(){
        Route::get('/all/staff','AllStaff')->name('all.staff');
        Route::get('/add/staff','AddStaff')->name('add.staff');
        Route::post('/store/staff','StoreStaff')->name('store.staff');
        Route::get('/edit/staff/{id}','EditStaff')->name('edit.staff');
        Route::post('/update/staff','UpdateStaff')->name('update.staff');
        Route::get('/delete/staff/{id}','DeleteStaff')->name('delete.staff');
    });

    Route::controller(StaffLoginController::class)->group(function(){
        Route::get('/add/user','AddUser')->name('add.stafflogin');
        Route::post('/store/user','StoreUser')->name('store.stafflogin');
    });

    Route::controller(VendorController::class)->group(function(){
        Route::get('/all/vendor','AllVendor')->name('all.vendor');
        Route::get('/add/vendor','AddVendor')->name('add.vendor');
        Route::post('/store/vendor','StoreVendor')->name('store.vendor');
        Route::get('/edit/vendor/{id}','EditVendor')->name('edit.vendor');
        Route::post('/update/vendor','UpdateVendor')->name('update.vendor');
        Route::get('/delete/vendor/{id}','DeleteVendor')->name('delete.vendor');
    });

    Route::controller(ItemController::class)->group(function(){
        Route::get('/add/item','AddItem')->name('add.item');
        Route::post('/store/item','StoreItem')->name('store.item');
    });


    Route::controller(ValueController::class)->group(function(){
        Route::get('/add/value','AddValue')->name('add.value');
        Route::post('/store/value','StoreValue')->name('store.value');
    });

    Route::controller(DataController::class)->group(function(){
         Route::get('/add/data','getData')->name('add.data');
    });

    Route::controller(StoreController::class)->group(function(){
        Route::get('/add/store','AddStore')->name('add.store');
        Route::get('/all/store','AllStore')->name('all.store');
        Route::post('/store/store','Store')->name('store.store');
        Route::post('/adit/store','EditStore')->name('edit.store');
        Route::post('/update/store','UpdateStore')->name('update.store');
        Route::post('/delete/store','DeleteStore')->name('delete.store');
   });


    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');
});

require __DIR__.'/auth.php';
