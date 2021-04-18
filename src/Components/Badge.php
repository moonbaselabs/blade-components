<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\View\Component;
use MoonbaseLabs\BladeComponents\Concerns\Themeable;

class Badge extends Component
{
    use Themeable;

    public function __construct($theme = 'default')
    {
        $this->theme = $theme;
    }

    public function render()
    {
        return view('blade-components::components.badge');
    }
}
