<?php

global $databaseBuilder;

$loader = require __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

function env($param, $default = null) {
    return $_ENV[$param] ?? $default;
}

function dd($mixed)
{
    echo "<pre>";
    var_dump($mixed);
    echo "</pre>";
    exit;
}


function db() : \ClanCats\Hydrahon\Builder
{
    $connection = new PDO(env('PDO_DSN'), env('PDO_USERNAME'), env('PDO_PASSWORD'));

    // create a new mysql query builder
    return new \ClanCats\Hydrahon\Builder('mysql', function ($query, $queryString, $queryParameters) use ($connection) {
        $statement = $connection->prepare($queryString);
        $statement->execute($queryParameters);

        // when the query is fetchable return all results and let hydrahon do the rest
        // (there's no results to be fetched for an update-query for example)
        if ($query instanceof \ClanCats\Hydrahon\Query\Sql\FetchableInterface) {
            return $statement->fetchAll(\PDO::FETCH_ASSOC);
        }
    });
}

$routes = require '../config/routes.php';
$router = new \qphp\system\Router($routes, 'web');
$router->handle();

