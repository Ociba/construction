<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use Auth;

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
        $get_amount     =DB::table('projects')->sum('amount');
        $get_projects   =DB::table('projects')->whereNotNull('amount')->get();
        return view('admin.dashboard', compact('count_projects','count_comments','get_materials','get_messages','get_projects','get_amount'));
    }
    /** 
     * This function creates the projects
    */
    private function createProjects(){
        $project_obj =new Project;
        $project_obj ->title         =request()->title;
        $project_obj ->amount =request()->amount;
        $project_obj ->organization  =request()->organization;
        $project_obj ->location          =request()->location;
        $project_obj ->deadline          =request()->deadline;
        $project_obj ->head_of_project   =request()->head_of_project;
        $project_obj ->created_by    =Auth::user()->id;
        $project_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created project');
    }
    /** 
     * This funcion validates the project created
    */
    protected function validateProjects(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors('Enter Title to continue');
        }elseif(empty(request()->amount)){
            return redirect()->back()->withErrors('Enter Amount for the project to continue');
        }elseif(empty(request()->organization)){
            return redirect()->back()->withErrors('Enter Organization to continue');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter location to continue');
        }elseif(empty(request()->deadline)){
            return redirect()->back()->withErrors('Enter Date to continue');
        }elseif(empty(request()->head_of_project)){
            return redirect()->back()->withErrors('Enter Head of Project to continue');
        }else{
            return $this->createProjects();
        }
    }
     /** 
     * This function edits the project created
    */
    protected function editDashboardProject($project_id){
        $get_project_to_edit=DB::table('projects')->where('id',$project_id)->get();
        return view('admin.edit_dashboard_project', compact('get_project_to_edit'));
    }
    /** 
     * This function updates the project edited
    */
    protected function updateDashboardProject($project_id){
        Project::where('id', $project_id)->update(array(
            'title'         =>request()->title,
            'amount' =>request()->amount,
            'organization'  =>request()->organization,
            'location'      =>request()->location,
            'deadline'      =>request()->deadline,
            'head_of_project' =>request()->head_of_project,
        ));
        return redirect()->back()->with('msg', 'You have updated the project successfully');
    }
    /** 
     * This function deletes the project permanently
    */
    protected function deleteDashboardProject($project_id){
        Project::where('id',$project_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the project successfully');
    }
}
