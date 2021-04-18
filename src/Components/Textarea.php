<?php

namespace MoonbaseLabs\BladeComponents\Components;

class Textarea extends Control
{
    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default')
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);
    }

    public function render()
    {
        return view('blade-components::components.textarea');
    }
}
