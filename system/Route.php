<?php


namespace qphp\system;


class Route
{
    public $uri;
    public $method;
    public $controller;
    public $function;

    /**
     * Route constructor.
     * @param $uri
     * @param $method
     * @param $controller
     * @param $function
     */
    public function __construct($uri, $method, $controller, $function)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->controller = $controller;
        $this->function = $function;
    }


}