<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use Auth;
use Config;

class WorksController extends Controller {
    public function index() {
        return view('works.top', [
            'mode' => Config::get('mode')
        ]);
    }

    public function store(Request $request) {
        $time = new Time;
        $time->user_id = Auth::user()->user_id;
        $time->date = strtotime($request->date);
        $time->hour = $request->hour;
        $time->minute = $request->minute;
        $time->fee = $request->fee;
        $time->form = $request->form;
        $time->save();

        return '記録しました';
    }

    public function __construct() {
        Config::set([
            'mode' => 'works'
        ]);
        $this->middleware('auth');
    }
}
