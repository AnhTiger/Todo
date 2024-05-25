<?php
namespace Modules\Todo\app\Repositories;

use Modules\Admin\app\Repositories\RepositoryInterface;

interface TodoRepositoryInterface extends RepositoryInterface {

    public function getModel();
    public function getListTodo();

}

