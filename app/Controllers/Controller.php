<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class Controller {

    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function render(ResponseInterface $response, $file)
    {
        $this->container->view->render($response, $file);
    }
}