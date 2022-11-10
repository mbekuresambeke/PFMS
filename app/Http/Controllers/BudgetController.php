<?php

namespace App\Http\Controllers;

use App\Models\Budget;
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
        $budgets = Budget::all();
        $ThisMonthBudget = Budget::whereMonth('created_at', '=', date('m'))->sum('budget_amount');
        $Totalbudgets = Budget::all()->sum('budget_amount');
        $lastMonth = Budget::whereMonth('created_at',6)->sum('budget_amount');

//        dd($lastMonth);
//        dd($budgets);
        return view('budget.index',compact('budgets','ThisMonthBudget','Totalbudgets','lastMonth'));
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
        //
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
