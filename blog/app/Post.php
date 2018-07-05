<?php

namespace App;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(\App\Comment::class);
    }
    public function addComment($body){
        $this->comments()->create(compact('body'));
    }
}
