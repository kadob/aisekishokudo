<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Locadetail</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
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
            <!--ロケいいね機能ここから-->
            <span>
                @if($nicelocation)
	                <a href="{{ route('unnice',$location)}}" class="btn btn-success btn-sm">
	                いいね
		                <span class="badge">
		                {{ $location->nicelocations()->count() }}
		                </span>
	                </a>
                @else
	                <a href="{{ route('nice',$location)}}" class="btn btn-secondary btn-sm">
		            いいね
		                <span class="badge">
			            {{ $location->nicelocations()->count() }}
		                </span>
	                </a>
                @endif
                <!--いいね機能ここまで-->
            </span>
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