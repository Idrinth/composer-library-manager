<?php

namespace De\Idrinth\ComposerLibraryManager\Route;

use Phalcon\Mvc\Router;

class Put implements Route
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
        $router->addPut($this->path, ['controller' => $class, 'action' => $this->method]);
    }
}