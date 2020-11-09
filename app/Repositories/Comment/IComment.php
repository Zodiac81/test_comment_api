<?php


namespace App\Repositories\Comment;


use App\Models\Entities\Comment;
use App\Models\Entities\Event;

interface IComment
{
    public function getAll();

    public function saveItem(array $itemData);

    public function deleteItem(Comment $item);

    public function updateStatus(Comment $item);

    public function getItemByEventId(Event $event);
}
