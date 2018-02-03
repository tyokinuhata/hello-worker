<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WorksController extends Controller {
    public function index() {
        return view('works.top');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
