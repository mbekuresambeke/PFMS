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
        $DailyExpenses =  Expenses::whereDay('created_at', '=', date('d'))->sum('expenses_amount');
        // dd($DailyExpenses);
        $expenses = Expenses::with('ExpensesCategory')->where('user_id',auth::user()->id)->orderBy('created_at','desc')->paginate(15);
        $WeeklyExpenses = Expenses::where( 'created_at', '>', Carbon::now()->subDays(7))->sum('expenses_amount');
        $MonthlyExpenses = Expenses::whereMonth('created_at',date('m'))->sum('expenses_amount');
        return view('expenses.index',compact('TotalExpenses','DailyExpenses','WeeklyExpenses','MonthlyExpenses','expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth::user()->id;
        $ExpensesCategory = ExpensesCategory::all();

//        dd($ExpensesCategory);
        $budgets = Budget::all()->where('user_id',$user_id);

//        dd($budgets);

//        dd($budget);

        return view('expenses.create',compact('ExpensesCategory','budgets'));

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
        return back();
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
