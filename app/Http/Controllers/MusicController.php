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

}
