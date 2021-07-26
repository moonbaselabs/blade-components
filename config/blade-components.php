<?php

use MoonbaseLabs\BladeComponents\Components;

return [

    'components' => [

        'badge' => [
            'class' => Components\Badge::class,
            'themes' => [
                'default' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-gray-100 text-gray-800',
                'red' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-red-100 text-red-800',
                'yellow' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-yellow-100 text-yellow-800',
                'green' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-green-100 text-green-800',
                'blue' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-blue-100 text-blue-800',
                'indigo' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-indigo-100 text-indigo-800',
                'purple' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-purple-100 text-purple-800',
                'pink' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium bg-pink-100 text-pink-800',
            ],
        ],

        'button' => [
            'class' => Components\Button::class,
            'themes' => [
                'default' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
                'secondary' => 'inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
            ],
        ],

        'checkbox' => [
            'class' => Components\Checkbox::class,
            'themes' => [
                'default' => [
                    'normal' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded',
                    'invalid' => 'focus:ring-indigo-500 h-4 w-4 text-red-600 border-gray-300 rounded',
                    'disabled' => 'focus:ring-indigo-500 h-4 w-4 text-gray-600 border-gray-300 rounded',
                ],
            ],
        ],

        'description' => [
            'class' => Components\Description::class,
            'themes' => [
                'default' => 'mt-2 block text-sm text-gray-600',
            ],
        ],

        'menu' => [
            'class' => Components\Menu::class,
        ],

        'menu-item' => [
            'class' => Components\MenuItem::class,
            'themes' => [
                'default' => [
                    'normal' => 'block text-gray-700 block px-4 py-2 text-sm',
                    'active' => 'block bg-gray-100 text-gray-900 block px-4 py-2 text-sm',
                ],
            ],
        ],

        'error' => [
            'class' => Components\Error::class,
            'themes' => [
                'default' => 'mt-1 text-sm text-red-600',
            ],
        ],

        'field' => [
            'class' => Components\Field::class,
            'themes' => [
                'default' => 'space-y-1',
            ],
        ],

        'form' => [
            'class' => Components\Form::class,
        ],

        'input' => [
            'class' => Components\Input::class,
            'themes' => [
                'default' => [
                    'normal' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
                    'invalid' => 'block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md',
                    'disabled' => 'bg-gray-50 shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md',
                ],
            ],
        ],

        'label' => [
            'class' => Components\Label::class,
            'themes' => [
                'default' => 'block text-sm font-medium text-gray-700',
            ],
        ],

        'legend' => [
            'class' => Components\Legend::class,
            'themes' => [
                'default' => 'block text-sm font-medium text-gray-700',
            ],
        ],

        'radio' => [
            'class' => Components\Radio::class,
            'themes' => [
                'default' => [
                    'normal' => 'focus:ring-radio-500 h-5 w-5 text-radio-600 border-gray-300',
                    'invalid' => 'focus:ring-radio-500 h-5 w-5 text-red-600 border-gray-300',
                    'disabled' => 'focus:ring-radio-500 h-5 w-5 text-gray-600 border-gray-300',
                ],
            ],
        ],

        'select' => [
            'class' => Components\Select::class,
            'themes' => [
                'default' => [
                    'normal' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
                    'multiple' => 'relative bg-gray-50 border overflow-x-hidden divide-y divide-gray-200 overflow-y-scroll h-40',
                    'invalid' => 'block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md',
                    'disabled' => 'bg-gray-50 shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md',
                ],
            ],
        ],

        'textarea' => [
            'class' => Components\Textarea::class,
            'themes' => [
                'default' => [
                    'normal' => 'max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
                    'invalid' => 'max-w-lg shadow-sm block w-full focus:ring-red-500 focus:border-red-500 sm:text-sm border-gray-300 rounded-md',
                    'disabled' => 'bg-gray-50 max-w-lg shadow-sm block w-full focus:ring-gray-500 focus:border-gray-500 sm:text-sm border-gray-300 rounded-md',
                ],
            ],
        ],

    ],

];
