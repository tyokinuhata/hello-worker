<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Config;

class PayslipController extends Controller {

    public function index(Request $request) {

        DB::table('times');

        Config::set(
            ['mode' => 'works'
        ]);

        return view('works.payslip');
    }
}
