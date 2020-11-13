<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use App\Role;
class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;
    protected $appends = ['img_url'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avator'
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

    public function getImgUrlAttribute($value){
        return asset(Storage::url('users/default.png'));
    }

    // public function role()
    // {
    //     return $this->belongsTo(Role::class, 'role_id');
    // }
}
