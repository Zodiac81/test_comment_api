<?php


namespace App\Services\Comment;


use Illuminate\Support\Facades\Facade;

class CommentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'commentService';
    }
}
