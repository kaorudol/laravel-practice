# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か
SELECT * FROM　todos

### Todoモデルのallメソッドの返り値は何か
Collection

### 配列の代わりにCollectionクラスを使用するメリットは
簡単にデータを加工することができる
Ex.期限が近い順に並べる、データがいくつあるか数える、平均値を出す

### view関数の第1・第2引数の指定と何をしているか
第一引数は表示するもの、第二引数は連想配列の形式でデータを渡している
Viewで何を表示するかを決めている

### index.blade.phpの$todos・$todoに代入されているものは何か
$todos：todo配列
$todo：todoインスタンス

## Todo作成機能

### Requestクラスのallメソッドは何をしているか
Requestで取ってきたデータを全て連想配列で取ってくる

### fillメソッドは何をしているか
連想配列をModelに一括代入している

### $fillableは何のために設定しているか
Modelに入れていいデータを指定している。

### saveメソッドで実行しているSQLは何か
INSERT文の実行

### redirect()->route()は何をしているか
routeの引数にリダイレクトしている。

## その他

### テーブル構成をマイグレーションファイルで管理するメリット
SQLを知らなくても、PHPコードでテーブル操作ができるため学習コストが不要
現在のデータベースの状態を他の開発者に共有することができる

### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか
php artisan migrate

### Seederクラスの役割は何か
テストデータの投入

### route関数の引数・返り値・使用するメリット
引数：移動する先のURL
返り値：URL 
メリット：可読性と保守性が上がる

### @extends・@section・@yieldの関係性とbladeを分割するメリット
@extends：親のテンプレートを使う
@section：@yieldに書いてあるところにデータを入れる
@yield：子が入る場所をつくる

### @csrfは何のための記述か
CSRF対策のための記述

### {{ }}とは何の省略系か
<?php echo htmlspecialchars($todo->content, ENT_QUOTES, 'UTF-8'); ?>
