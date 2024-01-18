<x-layout.app title="{{ config('app.name') }}">
    <div class="flex flex-col gap-8 sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
        @forelse($musics as $music)
            <a href="{{route('music.show', $music)}}">
                <x-music-card :title="$music->title" :src="$music->src" :singer="$music->singer"></x-music-card>
            </a>
        @empty
    </div>
    <div class="w-full h-lvh flex justify-center items-center text-3xl">
        Tidak Ada Data
    </div>
    @endforelse

</x-layout.app>
