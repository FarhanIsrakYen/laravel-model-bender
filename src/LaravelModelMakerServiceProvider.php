<?php

namespace FarhanIsrakYen\LaravelModelMaker;

use Illuminate\Support\ServiceProvider;
use FarhanIsrakYen\LaravelModelMaker\Commands\MakeModelCommand;

class LaravelModelMakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeModelCommand::class,
        ]);
    }

    public function boot()
    {
        //
    }
}
