<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>editpost</title>
    </head>
    <body>
        <main>
            <h1 class="edit">編集</h1>
            <div class="editpost">
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='celebrity'>
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
                    <div class="content">
                        <textarea name="post[content]" placeholder="〇〇〇のところが面白かった！">{{ $post->content }}</textarea>
                    </div>
                    <input type="submit" value="保存">
                </form>
            </div>
        <a href="/posts/{{ $post->id }}">戻る</a>
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