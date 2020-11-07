<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
