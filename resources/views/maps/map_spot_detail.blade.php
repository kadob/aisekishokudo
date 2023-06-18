<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>相席食堂マップスポット</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
        </header>
        <main>
            <div>
                <h2>ちょっと待てぃ！ロケ地</h2>
                <p>{{$map->store_name}}</p>
                <h2>出演者名</h2>
                <p>{{$map->location->celebrity}}</p>
                <h2>日付</h2>
                <p>{{$map->location->date}}</p>
                <h2>住所</h2>
                <p>{{$map->adress}}</p>
                <h2>グルメ</h2>
                <p>{{$map->gormet}}</p>
                <h2>キーワード</h2>
                <p>{{$map->key_word}}</p>
            </div>
        </main> 
        <footer>
            <nav>
                <ul>
                    <!--<li><a href="/posts/create">投稿</a></li>-->
                    <li><a href="/">マップ</a></li>
                    <li><a href="/locations">検索</a></li>
                </ul>
            </nav>
        </footer>    
    </body>
</html>