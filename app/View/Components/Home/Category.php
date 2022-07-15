<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Category extends Component
{
    public function __construct(
        public ?string $name,
        public ?string $icon,
        public int $total,
    )
    { }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.category');
    }
}
