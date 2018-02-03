<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;

class WorksController extends Controller {
    public function index() {
        return view('works.top', [
            'mode' => Config::get('mode')
        ]);
    }

    public function __construct()
    {
        Config::set([
            'mode' => 'works'
        ]);
        $this->middleware('auth');
    }
}
