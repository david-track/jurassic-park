<?php

namespace App\View\Components\JurassicPark;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\JurassicParkController;

class terminal extends Component
{
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.jurassic-park.terminal", [
            "title" => $this->title,
        ]);
    }
}
