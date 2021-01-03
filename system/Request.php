<?php


namespace qphp\system;


class Request
{
    public $ip;
    public $uri;
    public $host;
    public $method;

    public function __construct()
    {
        $this->ip = $_SERVER['REMOTE_ADDR'];

        $this->uri = $_SERVER['REQUEST_URI'];
        if (strstr($this->uri, '?') !== FALSE)
        {
            $this->uri = explode("?", $this->uri)[0];
        }

        $this->host = $_SERVER['HTTP_HOST'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function input($parameter, $default = null)
    {
        return $_REQUEST[$parameter] ?? $default;
    }

    public function get($parameter, $default = null)
    {
        return $_GET[$parameter] ?? $default;
    }

    public function post($parameter, $default = null)
    {
        return $_POST[$parameter] ?? $default;
    }

    public function exists($parameter)
    {
        return array_key_exists($parameter, $_REQUEST);
    }

    public function all()
    {
        return $_REQUEST;
    }
}