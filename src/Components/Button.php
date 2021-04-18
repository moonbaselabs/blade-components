<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\View\Component;
use MoonbaseLabs\BladeComponents\Concerns\Themeable;

class Button extends Component
{
    use Themeable;

    public $href;

    public function __construct($href = null, $theme = 'default')
    {
        $this->href = $href;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('blade-components::components.button');
    }
}
