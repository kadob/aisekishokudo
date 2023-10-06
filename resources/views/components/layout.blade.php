<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ABCテレビの相席食堂のマップアプリが誕生！相席食堂好きが相席食堂をより楽しめるアプリとなっています！ぜひのぞきに来てください！">
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    </head>
    <body>
        <div class="wrapper">
        <header class="header">
            <nav class="headnav">
                <div class="logo"><img src="{{ asset('images/aiseki_shokudo/相席食堂ロゴ.jpg') }}" alt="相席食堂"></div>
                <div class="login">
                    @if (Route::has('login'))
                        <ul>
                            @auth
                                    <li><a href="/profile">プロフィール</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">ログイン</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">アカウント登録</a></li>
                            @endif
                            @endauth
                        </ul>
                    @endif
                </div>
            </nav>
        </header>
        {{$slot}}
        <footer class="footer">
            <nav class="footnav">
                <ul>
                    <li><a href="/posts/create">投稿</a></li>
                    <li><a href="/">マップ</a></li>
                    <li><a href="/locations">ロケ検索</a></li>
                </ul>
            </nav>
        </footer>
        </div>
    </body>
</html>