<?php

namespace De\Idrinth\ComposerLibraryManager\Controller;

use Phalcon\Mvc\Controller;

class Request extends Controller
{
    public function add()
    {
        return $this->response
            ->setJsonContent(json_decode('{"name":"Björn","id":1,"decider":false}'));
    }
    public function index()
    {
        return $this->response
            ->setJsonContent(json_decode('[{"id":1,"name":"example/example1","vote":1},{"id":2,"name":"example/example1","vote":-1},{"id":3,"name":"example/example2","vote":-2}]'));
    }
    public function vote(int $id)
    {
        return $this->response
            ->setStatusCode(202);
    }
    public function detail(int $id)
    {
        return $this->response
            ->setJsonContent(json_decode('{"id":'.$id.',"description":"Hi there, this is a description","created":"2019-11-19 23:59:59","watchers":[1,12]}'));
    }
}