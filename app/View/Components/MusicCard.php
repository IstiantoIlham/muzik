<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MusicCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "Default Title",
        public string $src = "https://i1.sndcdn.com/artworks-M8Wi9lt9SqthzRKr-glE10g-t500x500.jpg",
        public string $singer = "Yoasobi",

    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.music-card');
    }
}
