<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public function __construct($name)
    {
    $this->name=$name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
