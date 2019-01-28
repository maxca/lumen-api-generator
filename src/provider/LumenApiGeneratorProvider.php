<?php

namespace LumenApiGenerator\Provider;

use LumenApiGenerator\Command\GenerateFileCommand;
use Illuminate\Support\ServiceProvider;

class LumenApiGeneratorProvider extends ServiceProvider
{

    protected $command = array(
        GenerateFileCommand::class,
    );

    public function boot()
    {
        $this->commands($this->command);
    }
}