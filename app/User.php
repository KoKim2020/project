<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use App\Role;
use App\Tag;
class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;
    protected $appends = ['profile_img'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getProfileImgAttribute($value){
        return asset(Storage::url($this->avatar));
    }

     /**
     * Get the author record associated with the user.
     */
    public function author()
    {
        return $this->hasOne('App\Author');
    }

}
