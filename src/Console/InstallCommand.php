<?php

namespace MoonbaseLabs\BladeComponents\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    protected $signature = 'blade-components:install';

    protected $description = 'Install Blade Components resources';

    public function handle()
    {
        // Config...
        $this->callSilent('vendor:publish', ['--tag' => 'blade-components']);

        // NPM Packages...
        $this->updateNodePackages(function ($packages) {
            return [
                '@tailwindcss/forms' => '^0.3.3',
                'alpinejs' => '^3.1.1',
                'autoprefixer' => '^10.2.6',
                'tailwindcss' => '^2.2.4',
            ] + $packages;
        });

        // Tailwind / Webpack...
        copy(__DIR__.'/../../stubs/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__.'/../../stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/../../stubs/resources/css/app.css', resource_path('css/app.css'));
        copy(__DIR__.'/../../stubs/resources/js/app.js', resource_path('js/app.js'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/js/blade-components', resource_path('js/blade-components'));

        $this->info('Blade Component resources installed successfully.');
        $this->comment('Please execute the "npm install && npm run dev" command to build your assets.');
    }

    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }
}
