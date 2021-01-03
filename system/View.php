<?php


namespace qphp\system;


abstract class View
{
    public static function render($view, $params = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('../views');
        $twig = new \Twig\Environment($loader, [
            'cache' => env('TWIG_CACHE_DIR', false),
        ]);
        return $twig->render($view, $params);
    }
}