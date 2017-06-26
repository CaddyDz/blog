<?php

namespace blog;

class Comment extends Model
{
    public function post()
    {
      return $this->belongsTo(Post::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
