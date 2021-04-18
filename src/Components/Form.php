<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $method;

    public $action;

    public $hasFiles;

    public function __construct($method = 'post', $action = '', $hasFiles = false)
    {
        $this->method = strtolower($method);
        $this->action = $action;
        $this->hasFiles = $hasFiles;
    }

    public function render()
    {
        return view('blade-components::components.form');
    }
}
