<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Postdetail</title>
    </head>
    <body>
        <main>
            <div class="celebrity">
                <h1>出演者</h1>
                <h2="celebrity">{{$post->location->celebrity}}</h2>
            </div>
            <div class="content">
                <h1>投稿内容</h1>
                <h2="content">{{$post->content}}</h2>
            </div>
            <div class="edit">
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
            <a href="/posts">戻る</a>
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