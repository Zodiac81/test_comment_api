<?php


namespace App\Services\Comment;


use App\Models\Entities\Comment;
use App\Models\Entities\Event;
use App\Repositories\Comment\IComment;

class CommentService
{
    protected $commentRepo;

    public function __construct(IComment $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    public function getAll()
    {
        return $this->commentRepo->getAll();
    }

    public function saveItem(array $itemData){}

    public function deleteItem(Comment $item){}

    public function updateStatus(Comment $item){}

    public function getItemByEventId(Event $event){}
}
