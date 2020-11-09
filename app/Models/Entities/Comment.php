<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['title', 'content', 'is_active'];


    public function events()
    {
        return $this->belongsToMany(Event::class, 'comments_events','comment_id', 'event_id');
    }
}
