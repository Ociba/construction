<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supply;
use Auth;
use DB;

class SuppliesController extends Controller
{
    /** 
     * This function gets the supply after login
    */
    protected function getSupplies(){
        $get_supplies =DB::table('supplies')->get();
        return view('admin.supplies', compact('get_supplies'));
    }
    /** 
     * This function gets front supplyes page
    */
    protected function getFrontSupplies(){
        return view('pages.supplies');
    }
    /** 
     * This function creates the supplyes
    */
    private function createSupply(){
        $supply_photo = request()->photo;
        $supply_photo_original_name = $supply_photo->getClientOriginalName();
        $supply_photo->move('supply_photos/',$supply_photo_original_name);

        $supply_obj =new Supply;
        $supply_obj ->title         =request()->title;
        $supply_obj ->photo            =$supply_photo_original_name;
        //$supply_obj ->created_by       =Auth::user()->id;
        $supply_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created SUpply');
    }
    /** 
     * This funcion validates the supply created
    */
    protected function validateSupply(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors('Enter title to continue');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload the photo to continue');
        }else{
           return $this->createSupply();
        }
    }
    /** 
     * This function edits the supply created
    */
    protected function editSupply($supply_id){
        $get_supply_to_edit=DB::table('supplies')->where('id',$supply_id)->get();
        return view('admin.edit_supply', compact('get_supply_to_edit'));
    }
    /** 
     * This function updates the supply edited
    */
    protected function updateSupply($supply_id){
        Supply::where('id', $supply_id)->update(array(
            'title'            =>request()->title,
        ));
        return redirect()->back()->with('msg', 'You have updated the supply successfully');
    }
    /** 
     * This function deletes the supply permanently
    */
    protected function deleteSupply($supply_id){
        Supply::where('id',$supply_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the supply successfully');
    }
}
