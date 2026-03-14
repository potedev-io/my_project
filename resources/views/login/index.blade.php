<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>

<body>
    <?php if ($variables["isLoginActive"]) { ?>
        <a href="/login/unregister">ログアウト</a>
    <?php } else { ?>
        <h2>新規登録</h2>
        <form method="post" action="login/register">
            @csrf
            <div>
                ID : <input type="text" name="id">
            </div>
            <div>
                PW : <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="送信">
            </div>
        </form>

        <h2>ログイン</h2>
        <form method="post" action="/login/sign_in">
            @csrf
            <div>
                ID : <input type="text" name="id">
            </div>
            <div>
                PW : <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="送信">
            </div>
        </form>
    <?php } ?>
</body>

</html>