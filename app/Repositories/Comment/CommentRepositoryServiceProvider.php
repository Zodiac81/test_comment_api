<?php


namespace App\Repositories\Comment;


use App\Models\Entities\Comment;

class CommentRepositoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repositories\Comment\IComment', function() {
            return new CommentRepository(new Comment());
        });
    }
}
