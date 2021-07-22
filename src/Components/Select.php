<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\View\AppendableAttributeValue;

class Select extends Control
{
    public $options;
    public $multiple;
    public $placeholder;

    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default', $options = [], $multiple = false, $placeholder = '')
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);
        $this->placeholder = $placeholder;
        $this->multiple = $multiple;
        $this->options = $options;
    }

    public function controlAttributes()
    {
        if (! $this->multiple) {
            return parent::controlAttributes();
        }

        $invalidAttributes = [];
        if ($this->invalid) {
            $invalidAttributes['aria-invalid'] = 'true';
            $invalidAttributes['aria-describedby'] = new AppendableAttributeValue($this->name.'_error');
        }

        $multipleClasses = ' '.$this->theme('multiple');

        return $this->attributes->merge([
            'class' => $this->theme($this->disabled ? 'disabled' : ($this->invalid ? 'invalid' : 'normal')).$multipleClasses,
        ] + $invalidAttributes);
    }

    public function isSelected($option): bool
    {
        if (is_array($this->value)) {
            return in_array($option, $this->value);
        }

        return (string) $option === (string) $this->value;
    }

    public function render()
    {
        return view('blade-components::components.select');
    }
}
