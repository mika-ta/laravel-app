<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<h2>ユーザー登録</h2>

<form action="/register" method="post">
    <div>
        <label for="name">名前：</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="address">住所：</label>
        <input type="text" id="address" name="address">
    </div>
    <div>
        <label for="phone_number">電話番号：</label>
        <input type="tel" id="phone_number" name="phone_number">
    </div>
    <div>
        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="memo">メモ：</label>
        <textarea id="memo" name="memo"></textarea>
    </div>
    <div>
        <button type="submit">登録</button>
    </div>
</form>

</body>
</html>
