<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Map</title>
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
            <!--マップ機能ここから-->
            <div id="map"></div>
	        <script src="{{ asset('/mapspot/mapspot.js') }}"></script>
	        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{config('services.map_key')}}&callback=initMap" async defer></script>
	        <!--マップ機能ここまで-->
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