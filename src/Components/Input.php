<?php

namespace MoonbaseLabs\BladeComponents\Components;

class Input extends Control
{
    public $type;

    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default', $type = 'text')
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);
        $this->type = $type;
    }

    public function render()
    {
        return view('blade-components::components.input');
    }
}
