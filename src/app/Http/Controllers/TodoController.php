<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo; // 追記
    }


    public function index()
    {
        $todos = $this->todo->all();

        return view('todo.index', ['todos' => $todos]);
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

    $this->todo->fill($inputs); // 変更
    $this->todo->save(); // 変更
    
    return redirect()->route('todo.index'); // 追記
    }


    public function show($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.show', ['todo' => $todo]);
    }


    public function edit($id)
    {
    // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
    $todo =  $this->todo->find($id);
    return view('todo.edit', ['todo' => $todo]);
    }

}






