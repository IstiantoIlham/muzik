<x-layout.app :title="$music->title">
    <div class="md:flex md:gap-8 flex-wrap">
        <div class="relative">
            <img src="storage/src/{{$music->src}}" alt="{{$music->title}}"
                 class="w-full h-auto rounded-xl object-cover md:min-w-60 md:min-h-60 absolute z-10">
            <img src="storage/src/{{$music->src}}" alt="{{$music->title}}"
                 class="w-full h-auto rounded-xl object-cover md:w-60 md:h-60 blur-3xl -z-50">
        </div>
        <div class="flex flex-col gap-8 mt-4 w-full md:max-w-[50rem] md:justify-between md:mt-0 md:py-4">
            <div class="flex flex-col gap-2">
                <div class="text-4xl font-medium">{{$music->title}}</div>
                <div class="text-2xl text-blue-300">{{$music->singer}}</div>
            </div>
            <audio controls>
                <source src="storage/audio/{{$music->audio}}" type="audio/mpeg">
            </audio>
        </div>
    </div>
</x-layout.app>
