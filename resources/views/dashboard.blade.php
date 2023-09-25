<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>プロフィール</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>{{ __('Dashboard') }}</h1>
        </header>
        <main>
            <p>ログイン完了！</p>
        </main>
        <footer>
            <a href="/posts/create">投稿</a>
            <a href="/">マップ</a>
            <a href="/locations">検索</a>
        </footer>
    </body>
</html>