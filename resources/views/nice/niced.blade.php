<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Nice</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
        </header>
        <main>
            <h1>いいねリスト</h1>
                <h2>いいねスポット</h2>
                    @foreach($nicemaps as $nicemap)
                        <p><a href="/maps/{{$nicemap->map->id}}">{{$nicemap->map->store_name}}</a></p>
                        <p>{{$nicemap->map->celebrity}}</p>
                    @endforeach
                <h2>いいねロケ</h2>
                    @foreach($nicelocations as $nicelocation)
                        <p><a href="/locations/{{$nicelocation->location->id}}">{{$nicelocation->location->date}}</a></p>
                        <p>{{$nicelocation->location->celebrity}}</p>
                    @endforeach
        </main>
        <footer>
            <nav>
                <ul>
                    <li><a href="/posts/create">投稿</a></li>
                    <li><a href="/">マップ</a></li>
                    <li><a href="/locations">ロケ検索</a></li>
                </ul>
            </nav>
        </footer>    
    </body>
</html>