<?php

namespace De\Idrinth\ComposerLibraryManager\Controller;

use Phalcon\Mvc\Controller;

class Watch extends Controller
{
    public function index(int $request) {
        return $this->response
            ->setJsonContent([]);
    }
    public function leave(int $request) {
        return $this->response
            ->setStatusCode(202);
    }
    public function join(int $request) {
        return $this->response
            ->setStatusCode(202);
    }
}