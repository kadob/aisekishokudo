<x-layout>
    <x-slot name="title">
        相席食堂投稿フォーム
    </x-slot>
    <main>
        <h1>投稿</h1>
        <form action="/posts" method="POST">
            @csrf
                <h2>旅人</h2>
                <select name="post[location_id]">
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->celebrity }}</option>
                    @endforeach
                </select>
            <input type="hidden" name="post[user_id]" value="{{ $user_id }}">
                <h2>投稿内容</h2>
                <textarea name="post[content]" placeholder="〇〇〇のところが面白かった！">{{ old('post.content') }}</textarea>
                <p class="content__error">{{ $errors->first('post.content') }}</p>
            <input type="submit" value="投稿する"/>
        </form>
        <h2 class="postmove"><a href="/posts">自分の投稿一覧　＞</a></h2>
    </main>
</x-layout>