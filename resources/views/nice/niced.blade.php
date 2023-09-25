<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Nice</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
            <!--ログイン機能ここから-->
            <div>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="/profile">プロフィール</a>
                            @else
                                <a href="{{ route('login') }}">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">アカウント登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <!--ログイン機能ここまで-->
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