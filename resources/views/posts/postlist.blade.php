<x-layout>
    <x-slot name="title">
        マイ投稿リスト
    </x-slot>
    <main>
        <h1>投稿一覧</h1>
            @foreach($posts as $post)
            <div class="postlist">
                <div class="post_celebrity">
                    <h4>旅人</h4>
                    <p>{{$post->location->celebrity}}</p>
                </div>
                <div class="click">
                    <button onclick="location.href='/posts/{{ $post->id }}/edit'">編集</button>
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
                </div>
            </div>
            <div>
                <h5>投稿内容</h5>
                <p>{{$post->content}}</p>
            </div>
            @endforeach
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </main>
</x-layout>