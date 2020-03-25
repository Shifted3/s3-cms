<?php

namespace S3;

use Dotenv\Dotenv;
use S3\Middlewares\TestMiddleware;
use Slim\App as Application;

class App extends Application
{
    public function __construct($container = [])
    {
        $this->loadMiddlewares();

        // Loads .env
        $dotenv = Dotenv::create(ROOT);
        $dotenv->load();

        parent::__construct($container);
    }

    protected function loadMiddlewares(): void
    {
        $middlewares = [
            new TestMiddleware,
        ];

        foreach ($middlewares as $middleware) {
            $this->add($middleware);
        }
    }
}
