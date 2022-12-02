<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use App\Models\Expenses;;
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
        return view('home',compact('budgets','budgets_count','expenses','expenses_count'));
    }
}
