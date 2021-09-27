<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Auth;
use DB;

class BranchesController extends Controller
{
     /** 
     * This function gets the branch after login
    */
    protected function getBranches(){
        $get_branches =DB::table('branches')->get();
        return view('admin.branches', compact('get_branches'));
    }
    /** 
     * This function gets front branches page
    */
    protected function getFrontBranches(){
        $get_branches =DB::table('branches')->get();
        return view('pages.branches', compact('get_branches'));
    }
    /** 
     * This function creates the branches
    */
    private function createBranch(){
        $branch_photo = request()->photo;
        $branch_photo_original_name = $branch_photo->getClientOriginalName();
        $branch_photo->move('branch_photos/',$branch_photo_original_name);

        $branch_obj =new Branch;
        $branch_obj ->location         =request()->location;
        $branch_obj ->address          =request()->address;
        $branch_obj ->email            =request()->email;
        $branch_obj ->contact1         =request()->contact1;
        $branch_obj ->contact2         =request()->contact2;
        $branch_obj ->photo            =$branch_photo_original_name;
        //$branch_obj ->created_by       =Auth::user()->id;
        $branch_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created branch');
    }
    /** 
     * This funcion validates the branch created
    */
    protected function validateBranch(){
        if(empty(request()->location)){
            return redirect()->back()->withErrors('Enter location to continue');
        }elseif(empty(request()->address)){
            return redirect()->back()->withErrors('Enter about the branch to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter email to continue');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload the photo to continue');
        }else{
           return $this->createBranch();
        }
    }
    /** 
     * This function edits the branch created
    */
    protected function editBranch($branch_id){
        $get_branch_to_edit=DB::table('branches')->where('id',$branch_id)->get();
        return view('admin.edit_branch', compact('get_branch_to_edit'));
    }
    /** 
     * This function updates the branch edited
    */
    protected function updateBranch($branch_id){
        Branch::where('id', $branch_id)->update(array(
            'location'         =>request()->location,
            'address'          =>request()->address,
            'email'            =>request()->email,
            'contact1'         =>request()->contact1,
            'contact2'         =>request()->contact2,
        ));
        return redirect()->back()->with('msg', 'You have updated the branch successfully');
    }
    /** 
     * This function deletes the branch permanently
    */
    protected function deleteBranch($branch_id){
        Branch::where('id',$branch_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the branch successfully');
    }
}
