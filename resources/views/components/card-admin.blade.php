<div class="w-full flex justify-between m-border bg-slate-100/10 rounded-lg overflow-hidden items-center">
    <div class="flex">
        <img src="storage/src/{{ $src }}" alt="{{ $title }}" class="object-cover rounded-md w-20 h-20 ">
        <div class="flex flex-col p-3 max-w-40 md:max-w-full">
            <div class="text-lg ">{{ $title }}</div>
            <div class="text-sm text-blue-200">{{ $singer }}</div>
        </div>
    </div>
    {{$slot}}
</div>
