<?php

namespace App\Console\Commands;


use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    protected $signature = 'make:service {name}';
    protected $description = 'Create a new service file';

    protected function getNameInput(): string
    {
        return $this->argument('name').'ServiceImplementation';
    }

    protected function getStub(): string
    {
        return app_path('Console/Stubs/MakeServiceTemplate.stub');
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Services\Implementations';
    }

    protected function replaceNamespace(&$stub, $name): GeneratorCommand
    {
        $class = str($this->getNameInput())->remove("ServiceImplementation");
        $serviceClass = "{$class}ServiceImplementation";
        $serviceInterface = "{$class}Service";
        $repositoryInterface = "{$class}Repository";

        $parameters = [
            '{{ namespace }}' => 'App\Services\Implementations',
            '{{ ServiceClass }}' => $serviceClass,
            '{{ ServiceInterface }}' => $serviceInterface,
            '{{ RepositoryInterface }}' => $repositoryInterface,
        ];
        $stub = str_replace(array_keys($parameters), array_values($parameters), $stub);
        return parent::replaceNamespace($stub, $serviceClass);
    }

    public function handle(): ?bool
    {
        $this->call('make:service-interface', [
            'name' => str($this->getNameInput())->remove('Implementation')
        ]);
        return parent::handle();
    }

}
