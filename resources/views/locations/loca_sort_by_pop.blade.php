<x-layout>
    <x-slot name="title">
        相席食堂ロケ人気ランキング
    </x-slot>
    <main>
            <h1>人気ロケランキング</h1>
            <div>
            @foreach($locations as $location)<!--LocationControllerのshowLocapopメソッドで受け取ったlocationsを回す-->
                <a href="/locations/{{$location->id}}"><img src="{{ asset($location->image_path) }}" alt="相席食堂ロケ写真" class="aiseki-image"></a>
                <div>
                    <h4>日付</h4>
                    <p>{{ $location->date }}</p>
                <div>
                <div>
                    <h4>旅人</h4>
                    <p>{{ $location->celebrity}}</p>
                </div>
                <div>
                    <h4>いいね数</h4>
                    <p>{{ $location->nicelocations_count }}</p>
                </div>
            @endforeach
            </div>
        <div class='paginate'>
            {{ $locations->links() }}
        </div>
    </main>
</x-layout>