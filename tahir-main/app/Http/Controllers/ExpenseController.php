<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Store;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function AllExpense(){
        $data = Expense::select('expenses.*', 'stores.store_name as store_name')->leftJoin('stores','expenses.store_id','stores.id')
        ->get();
        return view('expense.all_expense',compact('data'));
    }

    public function AddExpense(){
        $data = Store::get();
        return view('expense.add_expense',compact('data'));
    }

    public function StoreExpense(Request $request){
        $request->validate([
            'expense_type' => 'required',
            'expense_amount' => 'required',
            'date' => 'required',
            'store_id' => 'required'
        ]);
        Expense::insert([
            'expense_type' =>$request->expense_type,
            'expense_amount' => $request->expense_amount,
            'date' => $request->date,
            'store_id' => $request->store_id,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('all.expense');
    }

    public function EditExpense($id){
        $id = Expense::findOrfail($id);
        $data = Store::get();
        return view('expense.edit_expense',compact('id','data'));
    }

    public function UpdateExpense(Request $request){
        $exp_id = $request->id;
        $id = Expense::findOrfail($exp_id)->update([
            'expense_type' =>$request->expense_type,
            'expense_amount' => $request->expense_amount,
            'date' => $request->date,
            'store_id' => $request->store_id,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.expense');
    }

    public function DeleteExpense($id){
        $id = Expense::findOrfail($id)->delete();
        return redirect()->route('all.expense');
    }
}
