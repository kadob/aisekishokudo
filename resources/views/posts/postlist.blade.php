<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PostList</title>
    </head>
    <body>
        <main>
            <h1>投稿一覧</h1>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='celebrity'>{{$post->location->celebrity}}</h2>
                        <h2 class='content'>{{$post->content}}</h2>
                        <a href="/posts/{{$post->id}}">詳細へ</a>
                    </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $posts->links() }}
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