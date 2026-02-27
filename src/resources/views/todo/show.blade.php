<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        @extends('layouts.base')
        @section('content')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            ToDo詳細
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $todo->content }}</h5>
                            <p class="card-text">作成日時：{{ $todo->created_at }}</p>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <a href="{{ route('todo.edit', [ $todo->id]) }}" class="btn btn-info">編集する</a>
                            </div>
                            <div class="col-auto">
                                <form method="POST" action="{{ route('todo.delete', [$todo->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">削除する</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
</body>
</html>
