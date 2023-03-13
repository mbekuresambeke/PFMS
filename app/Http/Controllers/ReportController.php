<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use App\Models\Expenses;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    //


    public function index(){
        // $january = Expenses::where('create_at',date('Y-m'));
        $ThreeMonthsExpenses = DB::table('expenses')->whereBetween('created_at', [Carbon::now()
        ->subMonths(3), Carbon::now()])->sum('expenses_amount');

        // $EachMonthData = [];
        // for ($month = 1; $month <= 12; $month++) {
        // $EachMonthData[$month] = DB::table('expenses')
        // ->whereMonth('created_at',date('m'))
        // ->whereYear('created_at', Carbon::now()->year)
        // ->sum('expenses_amount');
        // }
        // $data = [];
        // for ($month = 1; $month <= 12; $month++) {
        //     $data[$month] = DB::table('expenses')
        //                     ->whereMonth('created_at', $month)
        //                     ->whereYear('created_at', Carbon::now()->year)
        //                     ->get();
        // }

        $YearlyData = Expenses::select('expenses_amount', 'created_at')
        ->get()
        ->sum('expenses_amount');

    // $usermcount = [];
    // $userArr = [];

    // foreach ($data as $key => $value) {
    //     $usermcount[(int)$key] = count($value);
    // }

    // $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    // for ($i = 1; $i <= 12; $i++) {
    //     if (!empty($usermcount[$i])) {
    //         $userArr[$i]['count'] = $usermcount[$i];
    //     } else {
    //         $userArr[$i]['count'] = 0;
    //     }
    //     $userArr[$i]['month'] = $month[$i - 1];
    // }

// dd($data);
    // return response()->json(array_values($userArr));


        // Yearly Records
    $YearlyData = DB::table('expenses')
                ->where('created_at', date('Y'))
                ->sum('expenses_amount');
        // dd($YearlyData);

        return view('reports.expenses',compact('ThreeMonthsExpenses','YearlyData'));
    }
}
