<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = ['name', 'body', 'blog_id'];

    public function blog_comments($id_of_blog)
    {

        return Comment::where('blog_id', $id_of_blog)->get();

    }

    public function blog()
    {

        return $this->belongsTo(Blog::class);

    }

}
