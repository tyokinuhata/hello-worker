<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;

class AdminController extends Controller {
    public function index() {
        if (Auth::user()->authority === '1') {
            return view('admin.top');
        } else {
            return redirect('/');
        }
    }

    public function __construct()
    {
        Config::set([
            'mode' => 'admin'
        ]);
        $this->middleware('auth');
    }
}
