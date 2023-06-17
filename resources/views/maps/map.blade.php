<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Maphome</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">  
    </head>
    <body>
        <header>
            <div>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">アカウント登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="/profile">プロフィール</a>
            </div>
        </header>
        <main>
            <div id="map" style="height:400px"></div>
	        <script src="{{ asset('/mapspot/mapspot.js') }}"></script>
	        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{config('services.map_key')}}&callback=initMap" async defer></script>
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