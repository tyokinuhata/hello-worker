<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WorksController extends Controller {
    public function index() {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('works.top');
    }
}
