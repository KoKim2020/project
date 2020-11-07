<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Profession;
class Author extends Model
{
    protected $fillable = ['user_id', 'profession'];

    protected $casts = [
        'profession' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function profession()
    {
        return $this->belongsToMany(Profession::class);
    }
}
