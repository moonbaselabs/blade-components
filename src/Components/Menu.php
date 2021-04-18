<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Menu extends Component
{
    public $id;

    public function __construct($id = null)
    {
        $this->id = $id ?? Str::random(8);
        MenuItem::$index = -1;
    }

    public function render()
    {
        return view('blade-components::components.menu');
    }
}
