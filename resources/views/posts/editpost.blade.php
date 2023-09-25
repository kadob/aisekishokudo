<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Editpost</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
        </header>
        <main>
            <h1>編集</h1>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <h2>出演者</h2>
                    <select name="post[location_id]">
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}"
                                @if($location->id == $post->location_id)
                                    selected
                                @endif
                            >
                                {{ $location->celebrity }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <textarea name="post[content]" placeholder="〇〇〇のところが面白かった！">{{ $post->content }}</textarea>
                    <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>
                </div>
                <input type="submit" value="保存する">
            </form>
            <a href="/posts">戻る</a>
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