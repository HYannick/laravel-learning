<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }


    public function addComment($body) {
//        Comment::create([
//            'body' => $body,
//            'post_id' => $this->id
//        ]);

        $this->comments()->create(compact('body'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
