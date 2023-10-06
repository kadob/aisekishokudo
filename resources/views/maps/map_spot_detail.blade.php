<x-layout>
    <x-slot name="title">
        ちょっと待てぃ！スポット
    </x-slot>
    <main>
        <div>
            <h2>ちょっと待てぃ！ロケ地</h2>
            <p>{{$map->store_name}}</p>
            <h2>旅人</h2>
            <p>{{$map->location->celebrity}}</p>
            <h2>日付</h2>
            <p>{{$map->location->date}}</p>
            <h2>住所</h2>
            <p>{{$map->adress}}</p>
            <h2>グルメ</h2>
            <p>{{$map->gormet}}</p>
            <h2>キーワード</h2>
            <p>{{$map->key_word}}</p>
        </div>
        <!--マップいいね機能ここから-->
        <span class="nice">
            @if($nicemap)
                <a href="{{ route('donot_good',$map)}}">
                    ♥
                <span class="badge">
                    {{ $map->nicemaps()->count() }}
                </span>
                </a>
            @else
                <a href="{{ route('do_good',$map)}}">
                    ♥
                <span class="badge">
                    {{ $map->nicemaps()->count() }}
                </span>
                </a>
            @endif
        </span>
        <!--マップいいね機能ここまで-->
    </main>
</x-layout>