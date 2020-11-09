<?php


namespace App\Repositories\Comment;


use App\Models\Entities\Comment;
use App\Models\Entities\Event;

class CommentRepository implements IComment
{
    protected $model;

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function saveItem(array $itemData)
    {
        dd(__METHOD__);
        return $this->model->create($itemData);
    }

    /**
     * @param Comment $item
     * @return bool|null
     * @throws \Exception
     */
    public function deleteItem(Comment $item)
    {
        dd(__METHOD__);
       return $item->delete();
    }

    /**
     * @param Comment $item
     * @return bool
     */
    public function updateStatus(Comment $item)
    {
        dd(__METHOD__);
        return $item->update(['is_active' => !$item->is_active]);
    }

    /**
     * @param Event $event
     */
    public function getItemByEventId(Event $event)
    {
        dd(__METHOD__);
    }
}
