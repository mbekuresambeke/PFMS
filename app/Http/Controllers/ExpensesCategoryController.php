<?php

namespace App\Http\Controllers;

use App\Models\ExpensesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpensesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_categories = ExpensesCategory::where('user_id', auth::user()->id)->get();
        // dd($All_categories);
        return view('expenses_category.index', compact('All_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Newdata = request()->validate($request, [
            'expenses_cat_name' => 'required',
            'expenses_category_desc' => 'required',
        ]);
        $user_id = auth::user()->id;
        $expense_cat = new ExpensesCategory;
        $expense_cat->user_id = $user_id;
        $expense_cat->expenses_category_name = $request['expenses_cat_name'];
        $expense_cat->expenses_category_desc = $request['expenses_category_desc'];
        $expense_cat->save();

        return redirect()->back()->with('success', 'You have successfully added a new data');
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
        return view('expenses_category.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('expenses_category.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('expenses_category.delete');

    }
}
