<?php

namespace MoonbaseLabs\BladeComponents\Components;

use Illuminate\Support\Collection;
use Illuminate\View\AppendableAttributeValue;
use InvalidArgumentException;

class Select extends Control
{
    public $options;
    public $multiple;
    public $placeholder;

    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default', $options = [], $multiple = false, $placeholder = '', $keyBy = 'id', $property = 'name')
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);
        $this->placeholder = $placeholder;
        $this->multiple = $multiple;

        if ($options instanceof Collection) {
            $this->options = $options->mapWithKeys(fn ($option) => [$option->{$keyBy} => $option->{$property}]);
        } elseif (is_array($options)) {
            $this->options = $options;
        } else {
            throw new InvalidArgumentException('Invalid options');
        }
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

        $multipleClasses = ' bg-gray-50 border overflow-x-hidden divide-y overflow-y-scroll h-40';

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
