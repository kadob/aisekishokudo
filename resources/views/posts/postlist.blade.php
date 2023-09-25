<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Postlist</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
        </header>
        <main>
            <h1>投稿一覧</h1>
            <div>
                @foreach($posts as $post)
                    <div>
                        <h3>{{$post->location->celebrity}}</h3>
                        <p>{{$post->content}}</p>
                        <a href="/posts/{{ $post->id }}/edit">編集</a>
                    </div>
                    <form action="/posts/{{ $post->id }}" id="form_{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{$post->id}})">削除</button>
                    </form>
                    <script>
                        function deletePost(id) {
                            'use strict'
                            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                document.getElementById(`form_${id}`).submit();
                            }
                        }
                    </script>
                @endforeach
            <div class='paginate'>
                {{ $posts->links() }}
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