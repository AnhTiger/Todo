<?php

namespace Modules\Todo\app\Repositories;

use Modules\Admin\app\Repositories\BaseRepository;
use Modules\Todo\app\Models\Todo;
use Modules\Todo\app\Repositories\TodoRepositoryInterface;

class TodoRepository extends BaseRepository implements TodoRepositoryInterface {

    public function getModel()
    {
        return Todo::class;
    }
    public function getListTodo()
    {
        return $this->model->whereNotNull('user_id')->select('id')->take(5)->get();
    }
    public function getTodo($id)
    {

        return $this->model->whereNotNull('user_id')->where('id','=',$id)->first();
    }
}
