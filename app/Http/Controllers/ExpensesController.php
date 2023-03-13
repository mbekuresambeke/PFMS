<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Expenses;
use App\Models\ExpensesCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $TotalExpenses =  Expenses::with('expenses_category_name')->sum('expenses_amount');
        $DailyExpenses =  Expenses::whereDate('created_at', Carbon::today())->sum('expenses_amount');
        $TotalBudgets = budget::sum('budget_amount');
        // dd($DailyExpenses);
        $expenses = Expenses::with('ExpensesCategory')->where('user_id',auth::user()->id)->orderBy('created_at','desc')->paginate(15);
        $WeeklyExpenses = Expenses::where( 'created_at', '>', Carbon::now()->subDays(7))->sum('expenses_amount');
        $MonthlyExpenses = Expenses::whereMonth('created_at',date('m'))->sum('expenses_amount');
        $percentage_calculator  =  $TotalBudgets - $TotalExpenses / 100;

        // dd($percentage_calculator);
        return view('expenses.index',compact('TotalExpenses','DailyExpenses','WeeklyExpenses','MonthlyExpenses','expenses','percentage_calculator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $user_id = auth::user()->id;
        $ExpensesCategory = ExpensesCategory::all();
        $expenses = Expenses::with('ExpensesCategory')->where('user_id',auth::user()->id)->orderBy('created_at','desc')->paginate(15);

//        dd($ExpensesCategory);
        // $budgets = Budget::all();
        // $budgets = Budget::with('expenses')->get();
// dd($budgets);
        //filter Laravel result using filter function
        // $filterBudgets =$budgets->filter(function($budget)
        // {
        // $totalExpenses = $budgets->expenses->sum('expenses_amount');
        // $totalBudget = $budgets->budget_amount;
        // });
        // $BudgetToUse =  $totalExpenses < ($totalBudget * 0.8);

        // dd($BudgetToUse);

//        dd($budgets);

//        dd($budget);
                        $budgets = Budget::with('expenses')->get();

                        // Filter Laravel result using filter function
                        $filteredBudgets = $budgets->filter(function ($budget) {
                            $totalExpenses = $budget->expenses->sum('expenses_amount');
                            $totalBudget = $budget->budget_amount;

                            return $totalExpenses < ($totalBudget * 0.9); // Limit budget to 90%
                        });

                        // Use the filtered budgets as needed
                        foreach ($filteredBudgets as $budget) {
                            // Do something with the budget
                            $budget->budget_amount;
                        }

        return view('expenses.create',compact('ExpensesCategory','budgets','expenses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd('How is it');
        $ValidExpenses = $this->validate($request, [
            'expenses_title' => 'required',
            'expenses_category' => 'required',
            'expenses_budget' => 'required',
            'expenses_amount' => 'required',
            'expenses_description' => 'required',
            'expenses_date' => 'required',
        ]);
//        dd($ValidExpenses);

        $user_id = auth::user()->id;
        $Expenses = new Expenses();
        $Expenses->user_id = $user_id;
        $Expenses->budget_id = $ValidExpenses['expenses_budget'];
        $Expenses->expenses_category_id = $ValidExpenses['expenses_category'];
        $Expenses->expenses_title = $ValidExpenses['expenses_title'];
        $Expenses->expenses_amount = $ValidExpenses['expenses_amount'];
        $Expenses->expenses_description = $ValidExpenses['expenses_description'];
        $Expenses->expenses_date = $ValidExpenses['expenses_date'];
        $Expenses->save();
        return back()->with('success','Expenses has been added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Expense = Expenses::findorFail($id);
       return view('expenses.show',compact('Expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
dd(confirm('Are you sure you want to delete this item ???'));
        $trash_expenses = Expenses::with('budgets','ExpensesCategory','users')->withTrashed()->where('id', $id)->restore();
        dd($trash_expenses);


    }
}
