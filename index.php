<?php

use De\Idrinth\ComposerLibraryManager\Controller\Comment;
use De\Idrinth\ComposerLibraryManager\Controller\Home;
use De\Idrinth\ComposerLibraryManager\Controller\Request;
use De\Idrinth\ComposerLibraryManager\Controller\User;
use De\Idrinth\ComposerLibraryManager\Route\ClassRoute;
use De\Idrinth\ComposerLibraryManager\Route\Get;
use De\Idrinth\ComposerLibraryManager\Route\Patch;
use De\Idrinth\ComposerLibraryManager\Route\Post;
use De\Idrinth\ComposerLibraryManager\Runner;

require_once __DIR__.'/vendor/autoload.php';

(new Runner())(
    [
        new ClassRoute(Request::class, [
            new Get('index', '/requests/'),
            new Post('add', '/requests/'),
            new Patch('vote', '/request/{id}/'),
            new Get('detail', '/request/{id}/'),
        ]),
        new ClassRoute(Comment::class, [
            new Get('index', '/comments/{request}/'),
            new Post('add', '/comments/{request}/'),
        ]),
        new ClassRoute(User::class, [
            new Get('index', '/users/'),
            new Get('own', '/user/'),
        ]),
        new ClassRoute(Home::class, [
            new Get('index', '/'),
        ]),
    ]
);