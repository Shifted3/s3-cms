<?php

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;

/**
 * Shifted 3 Framework
 *
 * File Description:
 * These are function helpers for the framework
 *
 * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
 * Buyer beware; you have been warned!
 *
 */

if (!function_exists('view')) {
    /**
     * Renders the view selected by the user
     *
     * @param Slim\Http\Response $response
     * @param string $view_path Can use / or . as directory path
     * @param array $data
     *
     * @return Psr\Http\Message\ResponseInterface;
     */
    function view(string $view_path, array $data = []): ResponseInterface
    {
        global $container;

        if (! str_contains($view_path, '/')) {
            $view_path = explode('.', $view_path);

            if (! is_bool($view_path) && is_array($view_path)) {
                $new_path = "";
                foreach ($view_path as $key => $value) {
                    if (++$key != count($view_path)) {
                        $new_path .= $value . '/';
                    } else {
                        $new_path .= $value;
                    }
                }

                $view_path = $new_path;
            }
        }

        if (! str_contains($view_path, '.twig')) {
            $view_path .= '.twig';
        }

        return $container->view->render(
            $container->get('response'),
            $view_path,
            $data
        );
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

if (! function_exists('request')) {
    function request()
    {
        global $container;
        return $container->get('request');
    }
}

if (! function_exists('response')) {
    function response()
    {
        global $container;
        return $container->get('response');
    }
}