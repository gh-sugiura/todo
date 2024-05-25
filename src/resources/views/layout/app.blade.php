<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO LIST</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>

<body>
    <header class="header">
        <a class="header__text_L" href="/">
            Todo
        </a>
        <a class="header__text_R" href="/categories">
            カテゴリ一覧
        </a>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>