<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mapspot</title>
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
            <!--マップいいね機能ここから-->
            <span>
                @if($nicemap)
	                <a href="{{ route('donot_good',$map)}}" class="btn btn-success btn-sm">
	                いいね
		                <span class="badge">
		                {{ $map->nicemaps()->count() }}
		                </span>
	                </a>
                @else
	                <a href="{{ route('do_good',$map)}}" class="btn btn-secondary btn-sm">
		            いいね
		                <span class="badge">
			            {{ $map->nicemaps()->count() }}
		                </span>
	                </a>
                @endif
            </span>
            <!--マップいいね機能ここまで-->
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