<x-layout.app title="Upload Song">
    <form action="{{ route('music.store') }}" method="post" autocomplete="off" class="flex flex-col gap-5"
          enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-1">
            <label for="title" class="font-medium">Song Title</label>
            <input type="text" name="title" id="title" class="m-input">
            @error('title')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="singer" class="font-medium">Singer</label>
            <input type="text" name="singer" id="singer" class="m-input">
            @error('singer')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="src" class="font-medium">Upload Thumbnail</label>
            <input type="file" name="src" id="src" class="m-input">
            @error('src')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="audio" class="font-medium">Upload Audio</label>
            <input type="file" name="audio" id="audio" class="m-input">
            @error('audio')
            <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 p-2 rounded-lg">Upload</button>
    </form>
</x-layout.app>
