<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Locarank</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
        </header>
        <main>
            <h1>人気ロケランキング</h1>
                @foreach($locations as $location)<!--LocationControllerのshowLocapopメソッドで受け取ったlocationsを回す-->
                    <h5>いいね数</h5>
                    <p>{{ $location->nicelocations_count }}</p>
                    <h5>日付</h5>
                    <p>{{ $location->date }}</p>
                    <h5>出演者名</h5>
                    <p>{{ $location->celebrity}}</p>
                @endforeach
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