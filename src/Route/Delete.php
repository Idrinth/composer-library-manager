<?php

namespace De\Idrinth\ComposerLibraryManager\Route;

use Phalcon\Mvc\Router;

class Delete implements Route
{
    private $method;
    private $path;
    public function __construct(string $method, string $path)
    {
        $this->method = $method;
        $this->path   = $path;
    }

    public function __invoke(string $class, Router $router)
    {
        $router->addDelete($this->path, ['controller' => $class, 'action' => $this->method]);
    }
}