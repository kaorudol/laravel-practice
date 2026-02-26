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
        //dd($todos);

        return view('todo.index', ['todos' => $todos]);//修正
    }

    public function create()
    {
    return view('todo.create');
    //dd('新規作成画面のルート実行！');
    }


    public function store(Request $request)
    {
    $content = $request->all();
    //dd($content);

    $todo = new Todo(); 
    $todo->fill($content);
    $todo->save();
    

    return redirect()->route('todo.index'); // 追記
    }

    public function show($id)
    {
        $model = new Todo();
        $todo = $model->find($id);

        return view('todo.show', ['todo' => $todo]);
    }

}






