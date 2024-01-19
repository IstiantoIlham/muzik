<x-nav-admin>
    <a href="{{route('music.create')}}">
        <div class="py-2 px-8 bg-blue-800 rounded-md border border-slate-300/30">Create</div>
    </a>
</x-nav-admin>
<x-layout.admin>
    <div class="py-4 space-y-4 p-4">
        @forelse($musics as $music)
            <x-card-admin :title="$music->title" :singer="$music->singer" :src="$music->src">
                <div class="flex gap-4 mr-2 text-xl">
                    <a href="{{route('music.edit', $music)}}" class="flex justify-center items-center">
                        <i class="fa-regular fa-pen-to-square text-blue-300"></i>
                    </a>
                    <form action="{{route('music.destroy', $music)}}" method="post" class="h-full m-0 flex justify-center items-center" >
                        @csrf
                        @method('delete')
                        <button type="submit"><i class="fa-regular fa-trash-can text-red-500"></i></button>
                    </form>
                </div>
            </x-card-admin>
        @empty
            <div>Empty</div>
        @endforelse
    </div>
</x-layout.admin>
