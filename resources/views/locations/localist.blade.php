<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>相席食堂ロケ一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
        </header>
        <main>
            <h1>ロケ一覧</h1>
            <div>
                @foreach ($locations as $location)
                    <div>
                    <!--画像-->
                        <p>{{$location->date}}</p>
                        <p>
                            <a href="/locations/{{$location->id}}">{{$location->celebrity}}</a>
                        </p>    
                    </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $locations->links() }}
            </div>
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