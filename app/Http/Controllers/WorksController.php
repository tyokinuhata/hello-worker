<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;

class WorksController extends Controller {
    public function index() {
        dd(Config::get('mode'));
        return view('works.top');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
