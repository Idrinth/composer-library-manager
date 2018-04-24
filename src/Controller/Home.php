<?php

namespace De\Idrinth\ComposerLibraryManager\Controller;

use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Controller;

class Home extends Controller
{
    public function index(): ResponseInterface
    {
        $routes = [];
        foreach($this->router->getRoutes() as $route) {
            foreach ((array)$route->getHttpMethods() as $method) {
                $routes[$route->getPattern()][$method] = array_intersect_key($route->getPaths(),['controller'=>0, 'action'=>0]);
            }
            ksort($routes[$route->getPattern()]);
        }
        ksort($routes);
        return $this->response
            ->setJsonContent($routes);
    }
}