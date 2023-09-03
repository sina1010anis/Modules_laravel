<?php

namespace Mod\SDK\User\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Btn extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(public $title)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('User::components.btn');
    }
}
