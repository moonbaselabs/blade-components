<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\View\Component;
use MoonbaseLabs\BladeComponents\Concerns\Themeable;

class MenuItem extends Component
{
    use Themeable;

    public $as;
    public static $index;

    public function __construct($as = 'a', $theme = 'default')
    {
        $this->as = $as;
        $this->theme = $theme;
        self::$index++;
    }

    public function render()
    {
        return view('blade-components::components.menu-item');
    }
}
