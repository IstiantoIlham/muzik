<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardAdmin extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "Default Title",
        public string $singer = "Default Title",
        public string $src = "Default Title",
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-admin');
    }
}
