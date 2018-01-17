<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PageController extends Controller {

    public function home(RequestInterface $request, ResponseInterface $response)
    {
        $this->render($response, 'pages/home.twig.html');
    }

    public function login(RequestInterface $request, ResponseInterface $response)
    {
        $this->render($response, 'pages/login.twig.html');
    }
    public function postlogin(RequestInterface $request, ResponseInterface $response)
    {
            var_dump($request->getParams());
            //Do login here
        $this->render($response, 'pages/login.twig.html');
    }
}