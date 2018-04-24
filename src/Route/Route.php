<?php

namespace De\Idrinth\ComposerLibraryManager\Route;

use Phalcon\Mvc\Router;

interface Route
{
    public function __construct(string $method, string $path);
    public function __invoke(string $class, Router $router);
}