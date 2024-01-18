<x-layout.app title="Upload Song">
    <form action="{{ route('music.update', $music) }}" method="post"
          autocomplete="off" class="flex flex-col gap-5" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="flex flex-col gap-1">
            <label for="title" class="font-medium">Song Title</label>
            <input type="text" name="title" id="title" class="m-input" value="{{$music->title}}">
            @error('title')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="singer" class="font-medium">Singer</label>
            <input type="text" name="singer" id="singer" class="m-input" value="{{$music->singer}}">
            @error('singer')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="src" class="font-medium">Upload Thumbnail</label>
            <input type="file" name="src" id="src" class="m-input" value="{{old('src', $music->src)}}">
            @error('src')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="audio" class="font-medium">Upload Audio</label>
            <input type="file" name="audio" id="audio" class="m-input" value="{{$music->audio}}">
            @error('audio')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 p-2 rounded-lg">Update</button>
    </form>
</x-layout.app>
