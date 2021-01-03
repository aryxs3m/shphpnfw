<?php

return [
    "web" => [
        new \qphp\system\Route("/", "GET", \qphp\controllers\HomeController::class, "index"),
        new \qphp\system\Route("/form", "POST", \qphp\controllers\HomeController::class, "form"),
    ]
];