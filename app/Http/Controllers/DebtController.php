<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index()
    {

        $debts = Debt::all();

        return view('debts.index',compact('debts'));
    }

    public function create()
    {
        return view('debts.create');
    }

    public function store(Request $request)
    {
        // dd("Welcome Mr").auth::user->name;
        $debt = new Debt();

        $debt->debtor_name = $request->input('debtor_name');
        $debt->amount = $request->input('amount');
        $debt->due_date = $request->input('due_date');
        $debt->interest_rate = $request->input('interest_rate');

        $debt->save();

        return redirect()->route('debts.index');
    }

    public function edit(Debt $debt)
    {
        return view('debts.edit', compact('debt'));
    }

    public function update(Request $request, Debt $debt)
    {
        $debt->debtor_name = $request->input('debtor_name');
        $debt->amount = $request->input('amount');
        $debt->due_date = $request->input('due_date');
        $debt->interest_rate = $request->input('interest_rate');

        $debt->save();

        return redirect()->route('debts.index');
    }

    public function destroy(Debt $debt)
    {
        $debt->delete();

        return redirect()->route('debts.index');
    }

    public function calculateInterest(Request $request)
    {
        $principalAmount = $request->input('principalAmount');
        $interestRate = $request->input('interestRate');
        $expectedRefundDate = $request->input('expectedRefundDate');

        $overdueDays = Carbon::now()->diffInDays($expectedRefundDate);

        $interest = ($principalAmount * $interestRate * $overdueDays) / 365;

        return view('debts.calculate-interest', compact('interest'));
    }
}
