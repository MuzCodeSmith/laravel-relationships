<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function tags(){
        return $this->hasManyThrough(Tag::class,Post::class);
    }
}
