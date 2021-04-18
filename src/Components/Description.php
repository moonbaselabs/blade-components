<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\View\Component;
use MoonbaseLabs\BladeComponents\Concerns\Themeable;

class Description extends Component
{
    use Themeable;

    public $for;
    public $value;

    public function __construct($for, $value = null, $theme = 'default')
    {
        $this->for = $for;
        $this->value = $value;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('blade-components::components.description');
    }
}
