<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use DB;
use Auth;

class ServicesController extends Controller
{
    /** 
     * This function gets the services after login
    */
    protected function getServices(){
        $get_services =DB::table('services')->get();
        return view('admin.services',compact('get_services'));
    }
    /** 
     * This function gets services for front page
    */
    protected function getFrontServices(){
        return view('pages.services');
    }
    /** 
     * This function creates the services
    */
    private function createService(){
        $service_photo = request()->photo;
        $service_photo_original_name = $service_photo->getClientOriginalName();
        $service_photo->move('service_photos/',$service_photo_original_name);

        $service_obj =new Service;
        $service_obj ->title         =request()->title;
        $service_obj ->about_service =request()->about_service;
        $service_obj ->how_to_apply  =request()->how_to_apply;
        $service_obj ->photo         =$service_photo_original_name;
        $service_obj ->created_by    =Auth::user()->id;
        $service_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created service');
    }
    /** 
     * This funcion validates the service created
    */
    protected function validateService(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors('Enter Title to continue');
        }elseif(empty(request()->about_service)){
            return redirect()->back()->withErrors('Enter about the service to continue');
        }elseif(empty(request()->how_to_apply)){
            return redirect()->back()->withErrors('Enter how to apply to continue');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload the photo to continue');
        }else{
            return $this->createService();
        }
    }
    /** 
     * This function edits the service created
    */
    protected function editService($service_id){
        $get_service_to_edit=DB::table('services')->where('id',$service_id)->get();
        return view('admin.edit_service', compact('get_service_to_edit'));
    }
    /** 
     * This function updates the service edited
    */
    protected function updateService($service_id){
        Service::where('id', $service_id)->update(array(
            'title'         =>request()->title,
            'about_service' =>request()->about_service,
            'how_to_apply'  =>request()->how_to_apply,
        ));
        return redirect()->back()->with('msg', 'You have updated the service successfully');
    }
    /** 
     * This function deletes the service permanently
    */
    protected function deleteService($service_id){
        Service::where('id',$service_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the service successfully');
    }
}
