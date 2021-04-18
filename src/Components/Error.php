<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Component;
use MoonbaseLabs\BladeComponents\Concerns\Themeable;

class Error extends Component
{
    use Themeable;

    public $for;
    public $value;
    public $bag;

    public function __construct($for, $value = null, $bag = 'default', $theme = 'default')
    {
        $this->for = trim(str_replace(['[', ']'], ['.', ''], $for), '.');
        $this->value = $value;
        $this->bag = $bag;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('blade-components::components.error');
    }

    public function messages(ViewErrorBag $errors)
    {
        $bag = $errors->getBag($this->bag);

        return $bag->has($this->field) ? $bag->get($this->field) : [];
    }
}
