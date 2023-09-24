<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>相席食堂ロケ人気ランキング</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>人気ロケランキング</h1>
            @foreach($locations as $location)<!--LocationControllerのshowLocapopメソッドで受け取ったlocationsを回す-->
                <h2>いいね数</h2>
                    <p>{{ $location->nicelocations_count }}</p>
                <h2>日付</h2>
                    <p>{{ $location->date }}</p>
                <h2>出演者名</h2>
                    <p>{{ $location->celebrity}}</p>
            @endforeach
        <div class="footer">
            <a href="/posts/create">投稿</a>
            <a href="/">マップ</a>
            <a href="/locations">検索</a>
        </div>
    </body>
</html>