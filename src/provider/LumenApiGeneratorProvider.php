<?php
namespace LumenApiGenerator\Provider;

use LumenApiGenerator\Command\GenerateFileCommand;

class LumenApiGeneratorProvider {

    protected $command =array(
        GenerateFileCommand::class,
    );

   public function boot() {
       $this->commands($this->commands);
   }
}