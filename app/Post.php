<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $appends = ['img_url'];
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function getImgUrlAttribute($value){
        return asset(Storage::url($this->image));
    }
}
