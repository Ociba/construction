<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function getLoggedInUserLogo(){
        $user_logo = DB::table('users')->where('id', '=', $this->id)->value('profile_photo_path');
        if(empty($user_logo)){
            $user_logo = 'logo.png';
        }
        return $user_logo;
    }
    /** 
     * This function counts comments
    */
    public function countComments(){
        $count_comments =DB::table('comments')->where('status','pending')->count();
        return $count_comments;
    }
    /** 
     * This function gets comments
    */
    public function getComments(){
        $get_comments =DB::table('comments')->where('status','pending')->take(4)->get();
        return collect($get_comments);
    }
      /** 
     * This function counts messages
    */
    public function countMessages(){
        $count_contacts =DB::table('contacts')->where('status','pending')->count();
        return $count_contacts;
    }
    /** 
     * This function gets messages
    */
    public function getMessages(){
        $get_contacts =DB::table('contacts')->where('status','pending')->take(4)->get();
        return collect($get_contacts);
    }
}
