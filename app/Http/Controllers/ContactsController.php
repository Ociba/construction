<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use DB;
use Auth;
use App\Models\Comment;

class ContactsController extends Controller
{
     /** 
     * This function gets the contact after login
    */
    protected function getcontactMessages(){
        $get_contacts_messages =DB::table('contacts')->get();
        return view('admin.contact_messsages', compact('get_contacts_messages'));
    }
    /** 
     * This function gets front contact page
    */
    protected function getFrontContact(){
        return view('pages.contact');
    }
    /** 
     * This function creates the contacts
    */
    private function createContactMessage(){

        $contact_obj =new Contact;
        $contact_obj ->message   =request()->message;
        $contact_obj ->name      =request()->name;
        $contact_obj ->email     =request()->email;
        $contact_obj ->contact   =request()->contact;
        $contact_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created contact');
    }
    /** 
     * This funcion validates the contact created
    */
    protected function validateContactMessage(){
        if(empty(request()->message)){
            return redirect()->back()->withErrors('Enter message to continue');
        }elseif(empty(request()->name)){
            return redirect()->back()->withErrors('Enter about the contact to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter email to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Enter contact to continue');
        }else{
            return $this->createContactMessage();
        }
    }
     /** 
     * This function updates the pending contacts to read
    */
    protected function changePendingContactsToActive($contact_id){
        Contact::where('id', $contact_id)->update(array('status'=>'read'));
        return redirect()->back()->with('msg','You have marked Pending Contact to Read Successfully');
    }
    /** 
     * This function deletes the contact permanently
    */
    protected function deleteContactMessage($contact_id){
        Contact::where('id',$contact_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the contact successfully');
    }
     /** 
     * This function creates the comment
    */
    protected function createComment(){

        $comment_obj =new Comment;
        $comment_obj ->comment   =request()->comment;
        $comment_obj ->name      =request()->name;
        $comment_obj ->email     =request()->email;
        $comment_obj ->location  =request()->location;
        $comment_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created Comment');
    }
    /** 
     * This funcion validates the comment created
    */
    protected function validateComment(){
        if(empty(request()->comment)){
            return redirect()->back()->withErrors('Enter Comment to continue');
        }elseif(empty(request()->name)){
            return redirect()->back()->withErrors('Enter about the contact to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter email to continue');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter Location to continue');
        }else{
            return $this->createComment();
        }
    }
    /** 
     * This function gets comments sent
    */
    protected function getComments(){
        $get_all_the_comments =DB::table('comments')->get();
        return view('admin.comments', compact('get_all_the_comments'));
    }
    /** 
     * This function updates the pending comments to active
    */
    protected function changePendingCommentsToActive($comment_id){
        Comment::where('id', $comment_id)->update(array('status'=>'active'));
        return redirect()->back()->with('msg','You have marked Pending comment to Active Successfully');
    }
    /** 
     * This function deletes the comment permantly
    */
    protected function deleteComment($comment_id){
        Comment::where('id',$comment_id)->delete();
        return redirect()->back()->with('msg', 'You have deleted the Comment successfully');
    }
}
