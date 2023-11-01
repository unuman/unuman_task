<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】<br>{{ $task->title }}</p>
    <p>【内容】<br>{!! nl2br(e($task->body)) !!}</p>

    <div class="button-group">
        <button onclick='location.href="{{ route('tasks.index') }}"'>一覧へ戻る</button>
        <button onclick='location.href="{{ route('tasks.edit', $task) }}"'>編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>

</body>

</html>
