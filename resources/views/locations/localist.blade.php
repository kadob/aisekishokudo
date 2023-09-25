<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Localist</title>
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
            <h1>ロケリスト</h1>
            <!--検索機能ここから-->
            <form method="GET" action="{{ route('searchLocation') }}">
                <input type="search" placeholder="出演者名" name="search" value="@if (isset($search)) {{ $search }} @endif"><!--$searchが存在するかしないかで条件分岐-->
                    <div>
                        <button type="submit">検索</button>
                    </div>
            </form>
            <!--検索機能ここまで-->
            <!--人気ロケランキング画面に行く-->
            <h3><a href = "/locations/locapop">人気ロケランキング</a></h3>
            <h3><a href="/nices">いいね一覧</a></h3>
            <div>
                <!--LocationControllerのshowLocalistメソッドで受け取ったlocationsを回す-->
                @foreach ($locations as $location)
                    <div>
                    <!--ここで画像を挟む-->
                        <p>{{$location->date}}</p>
                        <p>
                            <!--ロケ詳細画面に行く-->
                            <a href="/locations/{{$location->id}}">{{$location->celebrity}}</a>
                        </p>
                    </div>
                @endforeach
            </div>
            <!--ページネーション-->
            <div class='paginate'>
                {{ $locations->links() }}
            </div>
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