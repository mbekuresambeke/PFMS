<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $date = \Carbon\Carbon::now();
        $lastMonthText =  $date->subMonth()->format('F');
        $budgetTotalSum = Budget::sum('budget_amount');
        $budgets = Budget::orderBy('created_at','DESC')->paginate(10);
        $BudgetSaving  = $budgetTotalSum / 100 * 20;
        $BudgetWants  = $budgetTotalSum / 100 * 30;
        $BudgetNeeds  = $budgetTotalSum / 100 * 50;
        // dd($BudgetTenPercent);

<<<<<<< HEAD
        //Amount Used Fetch
        //End Of Used Fetch
=======
        //Amount Used Fetch
        //End Of Used Fetch
>>>>>>> 1bf4b412f874792ab5fb2009203d1d6e9a56c5b0

        $ThisMonthBudget = Budget::whereMonth('created_at', '=', date('m'))->sum('budget_amount');
        $Totalbudgets = Budget::all()->sum('budget_amount');
        $lastMonth = Budget::whereMonth('created_at', '=', \Carbon\Carbon::now()->subMonth()->month)->sum('budget_amount');
        // dd($lastMonth);

//        dd($lastMonth);
//        dd($budgets);
        return view('budget.index',compact('budgets','ThisMonthBudget','Totalbudgets',
        'lastMonth','lastMonthText','BudgetSaving','BudgetWants','BudgetNeeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budget.budget_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'budget_title' => 'required',
            'budget_amount' => 'required|integer',
            'budget_type' => '',
            'budget_description' => 'required',

        ]);
        $user_id =  auth::user()->id;
        $budget  = new Budget;
        $budget->user_id = $user_id;
        $budget->budget_title = $request['budget_title'];
        $budget->budget_amount = $request['budget_amount'];
        $budget->budget_type = $request['budget_type'];
        $budget->budget_description = $request['budget_description'];
        $budget->budget_status = $request['budget_status'];
//        dd($budget);
        $budget->save();
        return back()->with('success', 'You have successfully added a new budget');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $user_id =  auth::user()->id;

        $budget = Budget::find($id);
<<<<<<< HEAD
        // $total_budget = Budget::sum('budget_amount');
=======
        $total_budget = Budget::sum('budget_amount')p;
>>>>>>> 1bf4b412f874792ab5fb2009203d1d6e9a56c5b0
        $budget_expenses =Expenses::where('budget_id',$id)->get();
        $budgetTwendyPer = $budget->budget_amount / 100 * 20;
        $budgetThirtyPer = $budget->budget_amount / 100 * 30;
        $budgetFirtyPer = $budget->budget_amount / 100 * 50;
        $budgetUsedPercentage = ($budget_expenses / $budget) * 100;
        dd($budgetUsedPercentage);

<<<<<<< HEAD
        // dd($budgetUsedPercentage);


        $budget_remain = $budget->budget_amount - $budget_expenses->where('budget_id',$id)->sum('expenses_amount');
        // $budget_remain = $budget->budget_amount - $budget_expenses->where('budget_id',$id);
          $budgetUsedPercentage = ( $budget_expenses / $budget) * 100;

        // DataTables::of($data)->make(true)
    dd($budgetUsedPercentage);
        return view ('budget.show',compact('budget','budget_expenses',
        'budgetTwendyPer','budgetThirtyPer','budgetFirtyPer','budget_remain'));
=======
        $budget_remain = $budget->budget_amount - $budget_expenses->where('budget_id',$id)->sum('expenses_amount');
        // DataTables::of($data)->make(true)
    // dd($budget_remain);
        return view ('budget.show',compact('budget','budget_expenses',
        'budgetTwendyPer','budgetThirtyPer','budgetFirtyPer','budget_remain','budgetUsedPercentage'));
>>>>>>> 1bf4b412f874792ab5fb2009203d1d6e9a56c5b0
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
        //
    }
}
