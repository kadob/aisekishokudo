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
                <h2>ちょっと待てぃスポット</h2>
                    @foreach($nicemaps as $nicemap)
                        <h3>スポット名</h3>
                        <a href="/maps/{{$nicemap->map->id}}">{{$nicemap->map->store_name}}</a>
                        <h3>キーワード</h3>
                        <p>{{$nicemap->map->key_word}}</p>
                    @endforeach
                <h2>いいねしたロケ</h2>
                    @foreach($nicelocations as $nicelocation)
                        <h3>出演者</h3>
                        <a href="/locations/{{$nicelocation->location->id}}">{{$nicelocation->location->celebrity}}</a>
                        <h3>日付</h3>
                        <p>{{$nicelocation->location->date}}</p>
                    @endforeach
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