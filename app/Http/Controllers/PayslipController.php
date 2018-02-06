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

        $names = DB::table('users')->select('name')->get();

        return view('works.payslip', [
            'names' => $names
        ]);
    }
}
