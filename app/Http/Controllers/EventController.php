<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Auth;
use DB;

class EventController extends Controller
{
   /** 
     * This function gets the event after login
    */
    protected function getEvents(){
        $get_events =DB::table('events')->get();
        return view('admin.events', compact('get_events'));
    }
    /** 
     * This function creates the events
    */
    private function createEvent(){

        $event_obj =new Event;
        $event_obj ->title         =request()->title;
        $event_obj ->start_time    =request()->start_time;
        $event_obj ->end_time      =request()->end_time;
        //$event_obj ->created_by       =Auth::user()->id;
        $event_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created event');
    }
    /** 
     * This funcion validates the event created
    */
    protected function validateEvent(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors('Enter title to continue');
        }elseif(empty(request()->start_time)){
            return redirect()->back()->withErrors('Enter the start time to continue');
        }elseif(empty(request()->end_time)){
            return redirect()->back()->withErrors('Enter the End time to continue');
        }else{
           return $this->createEvent();
        }
    }
    /** 
     * This function edits the event created
    */
    protected function editEvent($event_id){
        $get_event_to_edit=DB::table('events')->where('id',$event_id)->get();
        return view('admin.edit_event', compact('get_event_to_edit'));
    }
    /** 
     * This function updates the event edited
    */
    protected function updateEvent($event_id){
        Event::where('id', $event_id)->update(array(
            'title'            =>request()->title,
            'start_time'       =>request()->start_time,
            'end_time'         =>request()->end_time
        ));
        return redirect()->back()->with('msg', 'You have updated the event successfully');
    }
    /** 
     * This function deletes the event permanently
    */
    protected function deleteEvent($event_id){
        Event::where('id',$event_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the event successfully');
    }
}
