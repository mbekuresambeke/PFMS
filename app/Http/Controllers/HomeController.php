<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Expenses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

// use Illuminate\Validation\Rules\Password
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $expenses = Expenses::sum('expenses_amount');
        $expenses_count = Expenses::count();
        $budgets = Budget::sum('budget_amount');
        $budgets_count = Budget::count();
        // dd($expenses_count);
        return view('home', compact('budgets', 'budgets_count', 'expenses', 'expenses_count'));
    }

    public function test()
    {
        return view('test');
    }

    public function changePassword()
    {
   return view('Account.change-password');
}

public function updatePassword(Request $request)
{
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised(),
        ]);

        //Match The Old Password
        if (! Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', "Old Password Doesn't match!");
        }

        //Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('status', 'Password changed successfully!');
}
}
