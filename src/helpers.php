<?php

use Slim\Http\Response;

if (!function_exists('view')) {
    /**
     * Renders the view selected by the user
     *
     * @param Slim\Http\Response $response
     * @param string $twig_path Can use / or . as directory path
     *
     * @return Response
     */
    function view(Response $response, string $twig_path, array $data = []): Response
    {
        global $container;

        if (!str_contains($twig_path, '/')) {
            $twig_path = explode('.', $twig_path);

            if (!is_bool($twig_path) && is_array($twig_path)) {
                $new_path = "";
                foreach ($twig_path as $key => $value) {
                    if (++$key != count($twig_path)) {
                        $new_path .= $value . '/';
                    } else {
                        $new_path .= $value;
                    }
                }

                $twig_path = $new_path;
            }
        }

        if (!str_contains($twig_path, '.twig')) {
            $twig_path = $twig_path . '.twig';
        }

        return $container->view->render($response, $twig_path, $data);
    }
}

if (!function_exists('str_contains')) {
    /**
     * Checks wether a string contains a certain value
     * 
     * @param string $haystack The string to search in
     * @param string $needle The string to search for
     * 
     * @return bool
     */
    function str_contains(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) !== false;
    }
}
