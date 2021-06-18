# Blade Components

A set of themeable components built with Tailwind CSS and AlpineJS for use with Laravel Blade.

This project is still in Beta some APIs might change.

## Installation

```bash
composer require moonbaselabs/blade-components
```

Publish the components configuration file:

```bash
php artisan vendor:publish --tag=blade-components
```

Add the configuration file to the purge array in your Tailwind config:

```js
// tailwind.config.js

purge: [
    './config/blade-components.php'
],
```

Include the AlpineJS components in your JavaScript before loading AplineJS

```js
// resources/js/app.js

import './vendor/blade-components'
import 'alpinejs'
```

Your're all set! You may customize your component themes in `config/blade-components.php`.

## Components

*   [Badge](#badge)
*   [Button](#button)
*   [Checkbox](#checkbox)
*   [Description](#description)
*   [Error](#error)
*   [Field](#field)
*   [Form](#form)
*   [Input](#input)
*   [Label](#label)
*   [Legend](#legend)
*   [Menu](#menu)
*   [Menu Item](#menu-item)
*   [Radio](#radio)
*   [Select](#select)
*   [Textarea](#textarea)

### Badge

Renders a colored badge. Use the `theme` attribute to customize the look and feel:

```html
<x-badge theme="indigo">Badge</x-badge>
```
Output:

```html
<span class="...">Badge</span>
```

### Button

Renders a form button:

```html
<x-button>Button</x-button>
```
Output:

```html
<button class="...">Button</x-button>
```

When the `href` attribute is set this component will render as a link:

```html
<x-button href="https://moonbaselabs.com">More Info</x-button>
```
Output:

```html
<a href="https://moonbaselabs.com" class="...">More Info</a>
```

### Checkbox

Renders a form checkbox:

```html
<x-checkbox name="remember_me" />
```
Output:

```html
<input type="checkbox" name="remember_me" id="remember_me" class="..." />
```

Checkboxes will maintain their `checked` value after validation errors. If this field contains an error it's class attribute be set to the CSS classes specified for the `invalid` key in your config file.

### Description

Renders a form field description text to be used along with a label:

```html
<x-description for="password">Must be at least 8 characters.</x-description>
<x-description for="password" value="Must be at least 8 characters." />
```
Output:

```html
<div id="password_description" class="...">Must be at least 8 characters.</div>
<div id="password_description" class="...">Must be at least 8 characters.</div>
```

To make form fields accessible you should add `aria-describedby="FIELD_NAME_description` to corresponding form elements, exp: `<input type="password" aria-describedby="password_description">`

### Error

Renders an error message when a field fails server-side validation:

```html
<x-error for="password" />
````

Output:

```html
<!-- When password is invalid -->
<div id="password_error" class="...">The password field is required.</div>
```

You may override server-side validation messages using the `value` attribute or setting text content:

```html
<x-error for="password" value="That's a bad password" />
<x-error for="password">That's a bad password</x-error>
```

Use the `bag` attribute to pull errors from a specific error bag:

```html
<x-error for="password" bag="login" />
```

### Field

Renders a simple container for grouped form elements:

```html
<x-field>
    <x-label ...>
    <x-description ...>
    <x-error ...>
    <x-input ...>
</x-field>
```

Output:

```html
<div class="...">
    <label ...>
    <div ...>
    <div ...>
    <input ...>
</div>
```

### Form

Renders a form element with appropriate method and CSRF directives:

```html
<x-form action="https://moonbaselabs.com">
    ...
</x-form>
```

Output:

```html
<form method="post" action="https://moonbaselabs.com">
    <input type="hidden" name="_token" value="...">
    <input type="hidden" name="_method" value="post">
    ...
</form>
```

Add the `has-files` attribute to support file uploads:

```html
<x-form has-files method="put" action="https://moonbaselabs.com">
    ...
</x-form>
```

Output:

```html
<x-form method="put" action="https://moonbaselabs.com" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="...">
    <input type="hidden" name="_method" value="put">
    ...
</x-form>
```

### Input

_Documentation coming soon._

### Label

_Documentation coming soon._

### Legend

_Documentation coming soon._

### Menu

_Documentation coming soon._

### Menu Item

_Documentation coming soon._

### Radio

_Documentation coming soon._

### Select

_Documentation coming soon._

### Textarea

_Documentation coming soon._
