<?php

namespace De\Idrinth\ComposerLibraryManager\Controller;

use Phalcon\Mvc\Controller;

class User extends Controller
{
    public function own()
    {
        return $this->response
            ->setJsonContent(json_decode('{"name":"Björn","id":1,"decider":false,"email":"no-reply@example.dev"}'));
    }
    public function index()
    {
        return $this->response
            ->setJsonContent(json_decode('[{"name":"Björn","id":1},{"name":"Mark","id":12}]'));
    }
}