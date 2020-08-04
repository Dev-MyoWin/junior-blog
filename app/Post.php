<?php

namespace App;
use App\User;
Use App\Category;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','title', 'slug', 'sub_title', 'content','code','image_url','view', 'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    public function comments()
    {
       return $this->hasMany(Comment::class);
    }
}
