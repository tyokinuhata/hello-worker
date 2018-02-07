<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use DB;
use Auth;
use Config;

class PayslipController extends Controller {

    public function index(Request $request) {

        // TODO: 管理画面に移動
//        $payslip = DB::table('times')->select('date', 'hour', 'minute', 'fee', 'form')->where('user_id', $request->user_id)->get();

        // get
        $payslip = Time::where('user_id', '=', Auth::user()->user_id)
                        ->where('date', '>=', strtotime($request->from))
                        ->where('date', '<=', strtotime($request->to))
                        ->paginate(10);

        $cntDate = Time::where('user_id', Auth::user()->user_id)
                        ->where('date', '>=', strtotime($request->from))
                        ->where('date', '<=', strtotime($request->to))
                        ->count();

        $sumHour = Time::where('user_id', Auth::user()->user_id)
                        ->where('date', '>=', strtotime($request->from))
                        ->where('date', '<=', strtotime($request->to))
                        ->sum('hour');

        $sumMinute = Time::where('user_id', Auth::user()->user_id)
                        ->where('date', '>=', strtotime($request->from))
                        ->where('date', '<=', strtotime($request->to))
                        ->sum('minute');

        $sumFee = Time::where('user_id', Auth::user()->user_id)
                        ->where('date', '>=', strtotime($request->from))
                        ->where('date', '<=', strtotime($request->to))
                        ->sum('fee');

        return view('works.payslip', [
            'payslip' => $payslip,
            'cntDate' => $cntDate,
            'sumHour' => $sumHour,
            'sumMinute' => $sumMinute,
            'sumFee' => $sumFee,
        ]);
    }

    public function delete(Time $time) {
        $time->delete();

        return redirect('/works/payslip');
    }

    public function __construct() {
        Config::set([
            'mode' => 'works'
        ]);
        $this->middleware('auth');
    }
}
