<?php

namespace App\Http\Controllers\Api;

use App\Models\Entities\Comment;
use App\Models\Entities\Event;
use App\Services\Comment\CommentFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CommentController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = CommentFacade::getAll();
        if($comments->count()) {
            return $this->success($comments);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       CommentFacade::saveItem($request->all());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Comment $comment
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Comment $comment)
    {
        return CommentFacade::updateStatus($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return void
     */
    public function destroy(Comment $comment)
    {
       CommentFacade::deleteItem($comment);
    }

    public function getById(Event $event)
    {
        CommentFacade::getItemByEventId($event);
    }
}
