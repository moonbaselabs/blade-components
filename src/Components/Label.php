<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use MoonbaseLabs\BladeComponents\Concerns\Themeable;

class Label extends Component
{
    use Themeable;

    public $for;
    public $value;

    public function __construct($for = null, $value = null, $theme = 'default')
    {
        $this->for = $for;
        $this->value = $value;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('blade-components::components.label');
    }

    public function fallback()
    {
        return Str::ucfirst(str_replace('_', ' ', $this->for));
    }
}
