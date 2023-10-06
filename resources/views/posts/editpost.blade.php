<x-layout>
    <x-slot name="title">
        投稿編集フォーム
    </x-slot>
    <main>
        <h1>編集</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
                <h2>旅人</h2>
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
                <h2 class="postform">投稿内容</h2>
                <textarea name="post[content]" placeholder="〇〇〇のところが面白かった！">{{ $post->content }}</textarea>
                <p class="content__error">{{ $errors->first('post.content') }}</p>
            <input type="submit" value="保存する">
        </form>
        <h2 class="postmove"><a href="/posts">＜　戻る</a></h2>
    </main>
</x-layout>