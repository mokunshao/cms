<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class Home extends Controller
{
    public function index(Todo $todo)
    {
        $res = $todo->getData();
        print_r($res);
    }
}
