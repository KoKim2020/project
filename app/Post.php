<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Tag;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'body', 'status', 'body', 'slug', 'featured', 'meta_keywords'];

    protected $appends = ['img_url'];
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function getImgUrlAttribute($value){
        return asset(Storage::url($this->image));
    }
    
    public function tag(){
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
