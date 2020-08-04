<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['name','email','description','post_slug','post_id'];
    public function post()
    {
       return $this->belongsTo(Post::class);
    }
}
