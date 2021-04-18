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
