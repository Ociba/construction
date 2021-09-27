<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use DB;
use Auth;

class ProjectsController extends Controller
{
    /** 
     * This function gets the project after login
    */
    protected function getProjects(){
        $get_projects =DB::table('projects')->get();
        return view('admin.projects', compact('get_projects'));
    }
    /** 
     * This function gets front page for projects
    */
    protected function getFrontProjects(){
        $get_projects =DB::table('projects')->limit('4')->latest()->get();
        return view('pages.projects', compact('get_projects'));
    }
    /** 
     * This function gets projects for this month
    */
    protected function getProjectsThisMonth(){
        $get_projects_for_this_month=DB::table('projects')->whereMonth('created_at', '09')
        ->get();
        return view('pages.monthly-projects', compact('get_projects_for_this_month'));
    }
    /** 
     * This function creates the projects
    */
    private function createProject(){
        $project_photo = request()->photo;
        $project_photo_original_name = $project_photo->getClientOriginalName();
        $project_photo->move('project_photos/',$project_photo_original_name);

        $project_obj =new Project;
        $project_obj ->title         =request()->title;
        $project_obj ->about_project =request()->about_project;
        $project_obj ->organization  =request()->organization;
        $project_obj ->item          =request()->item;
        $project_obj ->photo         =$project_photo_original_name;
        //$project_obj ->created_by    =Auth::user()->id;
        $project_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created project');
    }
    /** 
     * This funcion validates the project created
    */
    protected function validateProject(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors('Enter Title to continue');
        }elseif(empty(request()->about_project)){
            return redirect()->back()->withErrors('Enter about the project to continue');
        }elseif(empty(request()->organization)){
            return redirect()->back()->withErrors('Enter Organization to continue');
        }elseif(empty(request()->item)){
            return redirect()->back()->withErrors('Enter item to continue');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload the photo to continue');
        }else{
            return $this->createProject();
        }
    }
    /** 
     * This function edits the project created
    */
    protected function editProject($project_id){
        $get_project_to_edit=DB::table('projects')->where('id',$project_id)->get();
        return view('admin.edit_project', compact('get_project_to_edit'));
    }
    /** 
     * This function updates the project edited
    */
    protected function updateProject($project_id){
        Project::where('id', $project_id)->update(array(
            'title'         =>request()->title,
            'about_project' =>request()->about_project,
            'organization'  =>request()->organization,
            'item'          =>request()->item,
        ));
        return redirect()->back()->with('msg', 'You have updated the project successfully');
    }
    /** 
     * This function deletes the project permanently
    */
    protected function deleteProject($project_id){
        Project::where('id',$project_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the project successfully');
    }
}
