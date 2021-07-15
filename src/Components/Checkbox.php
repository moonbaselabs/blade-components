<?php

namespace MoonbaseLabs\BladeComponents\Components;

class Checkbox extends Control
{
    public $checked;

    public function __construct($name, $id = null, $value = 'on', $bag = 'default', $disabled = false, $theme = 'default', $checked = false)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $sessionPath = self::sessionPath($name);
        $this->invalid = $this->errorBag($bag)->has($sessionPath);
        $this->disabled = $disabled;
        $this->theme = $theme;
        $this->checked = $checked;
    }

    public function render()
    {
        return view('blade-components::components.checkbox');
    }
}
