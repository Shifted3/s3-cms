<?php

namespace S3\Middlewares;

use Slim\Http\Request;
use Slim\Http\Response;

class TestMiddleware
{
    public function __invoke(Request $request, Response $response, $next)
    {
        return $next($request, $response);
    }
}
