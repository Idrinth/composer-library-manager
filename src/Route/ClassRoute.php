<?php

namespace De\Idrinth\ComposerLibraryManager\Route;

use Phalcon\Mvc\Router;

class ClassRoute
{
    private $class;
    private $routes;
    public function __construct(string $class, array $routes)
    {
        $this->class = $class;
        $this->routes = $routes;
    }

    public function __invoke(Router $router)
    {
        foreach($this->routes as $route) {
            $route($this->class, $router);
        }
    }
}