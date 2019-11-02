<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $primaryKey = 'id';
    public function getData()
    {
        return $this->get()->toArray();
    }
}
