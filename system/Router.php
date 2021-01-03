<?php

namespace qphp\system;

class Router
{

    private $routes;
    private $block;
    private $pre;

    /**
     * Router constructor.
     * @param array $routes
     * @param string $block
     * @param string|null $pre
     */
    public function __construct(array $routes, string $block, string $pre = "")
    {
        $this->routes = $routes;
        $this->block = $block;
        $this->pre = $pre;
    }

    public function handle()
    {
        $request = new Request();

        foreach ($this->routes[$this->block] as $route)
        {
            if ($route->uri == $this->pre . $request->uri && $request->method = $route->method)
            {
                $controller = new $route->controller;
                echo call_user_func([
                    $controller,
                    $route->function
                ]);
            }
        }

    }
}