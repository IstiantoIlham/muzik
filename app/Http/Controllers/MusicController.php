<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(Music $music)
    {
        return view('music.index', ['musics' => $music::get()]);
    }

    public function show(Music $music)
    {
        return view('music.show', ['music' => $music]);
    }

    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request, Music $music)
    {
        $this->validate($request, [
            'title' => ['required'],
            'singer' => ['required'],
            'src' => 'required|file|mimes:jpeg,jpg,png,gif|max:2048',
            'audio' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
        ]);

        $src = $request->file('src');
        $src->store('src', 'public');

        $audio = $request->file('audio');
        $audio->store('audio', 'public');

        $music->create([
            'title' => $request->title,
            'singer' => $request->singer,
            'src' => $src->hashName(),
            'audio' => $audio->hashName()
        ]);
        return to_route('music.index');
    }

    public function edit(Music $music)
    {
        return view('music.edit', ['music' => $music]);
    }

    public function update(Request $request, Music $music)
    {
        $this->validate($request, [
            'title' => ['required'],
            'singer' => ['required'],
            'src' => 'nullable|file|mimes:jpeg,jpg,png,gif|max:2048',
            'audio' => 'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
        ]);

        $src = $request->file('src');
        $src->store('src', 'public');

        $audio = $request->file('audio');
        $audio->store('audio', 'public');

        $music->update([
            'title' => $request->title,
            'singer' => $request->singer,
            'src' => $src->hashName(),
            'audio' => $audio->hashName()
        ]);
        return to_route('music.index');
    }

    public function destroy($music)
    {
        $data  = Music::findOrFail($music);
        unlink(public_path('storage/src/'. $data->src));
        unlink(public_path('storage/audio/'. $data->audio));
        $data->delete();
        return to_route('music.index');
    }
}
