<?php

namespace De\Idrinth\ComposerLibraryManager\Controller;

use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Controller;

class Home extends Controller
{
    public function index(): ResponseInterface
    {
        return $this->response
            ->setContent("Hi")
            ->setContentType('text/html', 'utf-8');
    }
}