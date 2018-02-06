<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Config;

class PayslipController extends Controller {

    public function index() {

        Config::set(
            ['mode' => 'works'
        ]);

        // TODO: 管理画面に移動
//        $payslip = DB::table('times')->select('date', 'hour', 'minute', 'fee', 'form')->where('user_id', $request->user_id)->get();

        $payslip = DB::table('times')->select('date', 'hour', 'minute', 'fee', 'form')->where('user_id', Auth::user()->user_id)->get();

        return view('works.payslip', [
            'payslip' => $payslip
        ]);
    }
}
