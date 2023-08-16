<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function AllExpense(){
        $data = Expense::get();
        return view('expense.all_expense',compact('data'));
    }

    public function AddExpense(){
        return view('expense.add_expense');
    }

    public function StoreExpense(Request $request){
        $request->validate([
            'expense_type' => 'required',
            'expense_amount' => 'required',
            'date' => 'required',
        ]);
        Expense::insert([
            'expense_type' =>$request->expense_type,
            'expense_amount' => $request->expense_amount,
            'date' => $request->date,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('all.expense');
    }

    public function EditExpense($id){
        $id = Expense::findOrfail($id);
        return view('expense.edit_expense',compact('id'));
    }
    
    public function UpdateExpense(Request $request){
        $exp_id = $request->id;
        $id = Expense::findOrfail($exp_id)->update([
            'expense_type' =>$request->expense_type,
            'expense_amount' => $request->expense_amount,
            'date' => $request->date,
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('all.expense');
    }

    public function DeleteExpense($id){
        $id = Expense::findOrfail($id)->delete();
        return redirect()->route('all.expense');
    }
}
