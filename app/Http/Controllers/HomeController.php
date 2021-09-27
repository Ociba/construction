<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    protected function getFrontPage(){
        $get_supplies =DB::table('supplies')->get();
        $get_events =DB::table('events')->limit('4')->latest()->get();
        $get_branches =DB::table('branches')->limit('3')->latest()->get();
        return view('welcome', compact('get_supplies','get_events','get_branches'));
    }
}
