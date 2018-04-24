<?php

namespace De\Idrinth\ComposerLibraryManager\Controller;

use Phalcon\Mvc\Controller;

class Comment extends Controller
{
    public function index(int $request)
    {
        return $this->response
            ->setJsonContent([
                'user' => $request,
                'message' => 'hi'
            ]);
    }
    public function add(int $request)
    {
        return $this->response
            ->setStatusCode(202);
    }
}