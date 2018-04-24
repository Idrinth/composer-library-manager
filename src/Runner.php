<?php

namespace De\Idrinth\ComposerLibraryManager;

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\View;

class Runner
{
    public function __invoke(array $routes)
    {
        $di = new FactoryDefault();
        $di->set('router', new Router());
        foreach($routes as $route) {
            $route($di->get('router'));
        }
        $di->set('view', (function() {
            return new View();
        })());
        $di->set('dispatcher', (function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setActionSuffix('');
            $dispatcher->setControllerSuffix('');
            return $dispatcher;
        })());
        return (new Application($di))->handle($this->getPath())->send();
    }
    private function getPath():string
    {
        return $this->replaceStart(
            $this->replaceStart(
                $_SERVER['DOCUMENT_ROOT'],
                dirname(__DIR__)
            ),
            $_SERVER['REQUEST_URI']
        );
    }
    private function replaceStart(string $search, string $input):string
    {
        return preg_replace(
            '/^'.preg_quote(str_replace('\\','/',$search),'/').'/',
            '',
            str_replace('\\','/',$input)
        );
    }
}