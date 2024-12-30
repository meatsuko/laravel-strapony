<?php

namespace Strapony;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class StraponyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Strapony', \Strapony\Strapony::class);
    }

    public function boot(): void
    {
        if (file_exists(resource_path('views/strapony'))) {
            Blade::anonymousComponentPath(resource_path('views/strapony'), 'strapony');
        }

        Blade::anonymousComponentPath(__DIR__.'/../stubs/resources/views/strapony', 'strapony');

        $this->bootTagCompiler();
    }


    public function bootTagCompiler()
    {
        $compiler = new StraponyTagCompiler(
            app('blade.compiler')->getClassComponentAliases(),
            app('blade.compiler')->getClassComponentNamespaces(),
            app('blade.compiler')
        );

        app()->bind('strapony.compiler', fn () => $compiler);

        app('blade.compiler')->precompiler(function ($in) use ($compiler) {
            return $compiler->compile($in);
        });
    }
}
