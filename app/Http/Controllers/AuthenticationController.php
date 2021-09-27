<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    //
    protected function logoutUser(){
        Auth::logout();
        return redirect('/');
}
/** 
 * This function gets the users
*/
protected function getUsers(){
    $get_users =DB::table('users')->get();
    return view('admin.users', compact('get_users'));
}
/** 
 * This function register members of the company information
*/
private function createUser(){
    
    $user_photo = request()->profile_photo_path;
    $user_photo_original_name = $user_photo->getClientOriginalName();
    $user_photo->move('profile_photos/',$user_photo_original_name);

    $user_obj =new User;
    $user_obj ->name                =request()->name;
    $user_obj ->email               =request()->email;
    $user_obj ->password            =Hash::make(request()->password);
    $user_obj ->profile_photo_path  =$user_photo_original_name;
    //$user_obj ->created_by       =Auth::user()->id;
    $user_obj ->save();
    return redirect()->back()->with('msg', 'You have successfully created User');
}
/** 
 * This funcion validates the User created
*/
protected function validateUser(){
    if(User::where('email',request()->email)->exists()){
        return redirect()->back()->withErrors('This email is already taken');
    }elseif(request()->password == request()->password_confirmation){
        return $this->createUser();
    }else{
        return redirect()->back()->withErrors('Make sure the two passwords match');
    }
}
/** 
 * This function deletes user permanently
*/
protected function deleteUser($user_id){
    User::where('id',$user_id)->delete();
    return redirect()->back()->with('msg', 'You have successfully deleted User');
}
}
