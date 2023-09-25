<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Postform</title>
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
            <h1>投稿</h1>
            <form action="/posts" method="POST">
                @csrf
                <div>
                    <h2>出演者</h2>
                    <select name="post[location_id]">
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->celebrity }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="post[user_id]" value="{{ $user_id }}">
                <div>
                    <textarea name="post[content]" placeholder="〇〇〇のところが面白かった！">{{ old('post.content') }}</textarea>
                    <p class="content__error">{{ $errors->first('post.content') }}</p>
                </div>
                <input type="submit" value="投稿する"/>
            </form>
            <a href="/posts">自分の投稿一覧</a>
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