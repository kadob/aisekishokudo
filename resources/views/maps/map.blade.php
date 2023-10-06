<x-layout>
    <x-slot name="title">
        相席食堂いっただっきまーすロケマップ
    </x-slot>
    <main>
        <!--マップ機能ここから-->
        <div id="map"></div>
        <script src="{{ asset('/mapspot/mapspot.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{config('services.map_key')}}&callback=initMap" async defer></script>
        <!--マップ機能ここまで-->
    </main>
</x-layout>