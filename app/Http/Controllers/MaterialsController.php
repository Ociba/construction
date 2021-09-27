<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use DB;

class MaterialsController extends Controller
{
     /** 
     * This function gets the material after login
    */
    protected function getMaterial(){
        $get_materials =DB::table('materials')->get();
        return view('admin.material', compact('get_materials'));
    }
    /** 
     * This function creates the material
    */
    private function createMaterial(){

        $material_obj =new Material;
        $material_obj ->district          =request()->district;
        $material_obj ->county            =request()->county;
        $material_obj ->village           =request()->village;
        $material_obj ->name              =request()->name;
        $material_obj ->contact           =request()->contact;
        $material_obj ->material          =request()->material;
        $material_obj ->quantity          =request()->quantity;
        //$material_obj ->created_by       =Auth::user()->id;
        $material_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created Material');
    }
    /** 
     * This funcion validates the material created
    */
    protected function validateMaterial(){
        if(empty(request()->district)){
            return redirect()->back()->withErrors('Enter district to continue');
        }elseif(empty(request()->county)){
            return redirect()->back()->withErrors('Enter the County to continue');
        }elseif(empty(request()->village)){
            return redirect()->back()->withErrors('Enter the village to continue');
        }elseif(empty(request()->name)){
            return redirect()->back()->withErrors('Enter the Name to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Enter the Contact to continue');
        }elseif(empty(request()->material)){
            return redirect()->back()->withErrors('Enter the Material to continue');
        }elseif(empty(request()->quantity)){
            return redirect()->back()->withErrors('Enter the Quantity to continue');
        }else{
           return $this->createMaterial();
        }
    }
   
    /** 
     * This function deletes the Material permanently
    */
    protected function deleteMaterial($material_id){
        Material::where('id',$material_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the supply successfully');
    }
}
