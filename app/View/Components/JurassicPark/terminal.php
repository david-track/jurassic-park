<?php

namespace App\View\Components\JurassicPark;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class terminal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $content)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.jurassic-park.terminal");
    }
}
