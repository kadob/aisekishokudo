<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ロケ詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
            <ul>
                <li>ログイン</li>
            </ul>
        </header>
        <main>
            <div>
                <h2>出演者名</h2>
                <p>{{$location->celebrity}}</p>
                <h2>日付</h2>
                <p>{{$location->date}}</p>
                <h2>ロケ内容</h2>
                <p>{{$location->overview}}</p>
                <h2>ロケ地</h2>
                <p>{{$location->place}}</p>
                <h2>キーフレーズ</h2>
                <p>{{$location->key_phrase}}</p>
            </div>
        </main>
        <footer>
            <nav>
                <ul>
                    <li><a href="/posts/create">投稿</a></li>
                    <li><a href="/">マップ</a></li>
                    <li><a href="/locations">検索</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>