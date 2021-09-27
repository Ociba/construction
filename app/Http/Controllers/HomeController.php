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
    /** 
     * This funtion gets the dashboard page
    */
    protected function getDashboard(){
        $count_projects =DB::table('projects')->count();
        $count_comments =DB::table('comments')->count();
        $get_materials  =DB::table('materials')->count();
        $get_messages   =DB::table('contacts')->count();
        return view('admin.dashboard', compact('count_projects','count_comments','get_materials','get_messages'));
    }
}
