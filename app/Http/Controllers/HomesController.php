<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class HomesController extends Controller
{
    public function index(Todo $todo)
    {
        $res = $todo->getData();
        print_r($res);
    }
}
