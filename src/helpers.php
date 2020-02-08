<?php

use Slim\Http\Response;

if (!function_exists('view')) {
    /**
     * Renders the view selected by the user
     *
     * @param Slim\Http\Response $response
     * @param string $twig_path
     *
     * @return Response
     */
    function view(Response $response, string $twig_path): Response
    {
        global $container;
        return $container->view->render($response, $twig_path);
    }
}
