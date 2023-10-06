<x-layout>
    <x-slot name="title">
        マイいいねリスト
    </x-slot>
    <main>
            <h1>いいねスポット</h1>
                @foreach($nicemaps as $nicemap)
                    <div class="mapspot">
                        <h4>ロケ地</h4>
                        <p><a href="/maps/{{$nicemap->map->id}}">{{$nicemap->map->store_name}}</a></p>
                    </div>
                    <div class="celebrity">
                        <h4>旅人</h4>
                        <p>{{$nicemap->map->location->celebrity}}</p>
                    </div>
                @endforeach
            <div>
            <h1>いいねロケ</h1>
                @foreach($nicelocations as $nicelocation)
                    <a href="/locations/{{$nicelocation->location->id}}"><img src="{{ asset($nicelocation->location->image_path) }}" alt="相席食堂ロケ写真" class="aiseki-image"></a>
                    <div class="date">
                        <h4>日付</h4>
                        <p>{{$nicelocation->location->date}}</p>
                    </div>
                    <div class="celebrity">
                        <h4>旅人</h4>
                        <p>{{$nicelocation->location->celebrity}}</p>
                    </div>
                @endforeach
            </div>
    </main>
</x-layout>