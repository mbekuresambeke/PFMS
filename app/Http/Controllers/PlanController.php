<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plans;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onProgressTasks = Plans::where('action', 'onProgress')->get();
        $onProgressTasksCount = Plans::where('action', 'onProgress')->count();
        // $onProgressTaskSum = Plans::where('action', 'onProgress')->sum('');
        $PendingTasks = Plans::where('action', 'Pending')->get();
        // $PendingTaskSum = Plans::where('action', 'Pending')->sum('');
        $PendingTasksCount = Plans::where('action', 'Pending')->count();
        $CompletedTasks = Plans::where('action','completed')->get();
        $CompletedTasksCount = Plans::where('action','completed')->count();
        // $CompletedTaskSum = Plans::where('action','completed')->sum('');
        return view('plans.index',compact('onProgressTasks','PendingTasks','CompletedTasks','onProgressTasksCount','PendingTasksCount','CompletedTasksCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $ValidatedPlan  = $this->validate($request,[
        'plan_title' => 'required',
        'plan_estimate_price' =>'required ',
        'category' =>'required',
        'duration' =>'required',
        'plan_status' =>'required',
        'action' =>'required'
      ]);

      $user_id = auth::user()->id;
      $plan = new Plans();
      $plan->user_id = $user_id;
      $plan->plan_title = $ValidatedPlan['plan_title'];
      $plan->plan_estimate_price = $ValidatedPlan['plan_estimate_price'];
      $plan->category = $ValidatedPlan['category'];
      $plan->duration = $ValidatedPlan['duration'];
      $plan->plan_status = $ValidatedPlan['plan_status'];
      $plan->action = $ValidatedPlan['action'];
      $plan->save();
      return back()->with('success','Plan has been added Successfully');

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
