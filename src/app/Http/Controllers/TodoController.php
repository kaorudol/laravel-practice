<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        
        return view('todo.index', ['todos' => $todos]);//修正
    }

    public function create()
    {
    return view('todo.create', ['content']);
    dd('新規作成画面のルート実行！');
    }
}


