<?php

namespace MoonbaseLabs\BladeComponents\Concerns;

use Illuminate\Support\ViewErrorBag;

trait HandlesValidationErrors
{
    public $invalid;

    protected function errorBag($name = 'default')
    {
        $bags = view()->shared('errors', fn () => request()->session()->get('errors', new ViewErrorBag));

        return $bags->getBag($name);
    }

    public static function sessionPath($name)
    {
        return trim(str_replace(['[', ']'], ['.', ''], $name), '.');
    }
}
