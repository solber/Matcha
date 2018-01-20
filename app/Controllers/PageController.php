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

    public function register(RequestInterface $request, ResponseInterface $response)
    {
        $this->render($response, 'pages/register.twig.html');
    }
    public function postregister(RequestInterface $request, ResponseInterface $response)
    {
        var_dump($request->getParams());
        //Do login here
        $this->render($response, 'pages/register.twig.html');
    }
    public function profile(RequestInterface $request, ResponseInterface $response)
    {
        $this->render($response, 'pages/profile.twig.html');
    }
    public function postprofile(RequestInterface $request, ResponseInterface $response)
    {
        var_dump($request->getParams());
        //Do login here
        $this->render($response, 'pages/profile.twig.html');
    }
    public function suggestion(RequestInterface $request, ResponseInterface $response)
    {
        $this->render($response, 'pages/suggestion.twig.html');
    }
    public function postsuggestion(RequestInterface $request, ResponseInterface $response)
    {
        var_dump($request->getParams());
        //Do login here
        $this->render($response, 'pages/suggestion.twig.html');
    }
}