<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リスト表示サンプル</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2>開催クラス一覧</h2>
    <div class="list-group">
        <!-- アイテムのリストをループ処理 -->
        <a>リスト１</a>
        <a>リスト１</a>
        <a>リスト１</a>
        <a>リスト１</a>
{{--        @foreach ($items as $item)--}}
{{--            <a href="#" class="list-group-item list-group-item-action">--}}
{{--                {{ $item['name'] }} <!-- アイテム名を表示 -->--}}
{{--            </a>--}}
{{--        @endforeach--}}
    </div>
</div>
</body>
</html>

