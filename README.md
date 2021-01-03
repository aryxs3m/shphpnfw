# shPHPnfw
Micro PHP thing for fun

## What is shPHPnfw?
shPHPnfw (shitty PHP "not framework") is a shitty PHP framework, that is not a framework.

## What?
- MVC
- Twig templating engine
- Laravel like input data handling
- dotenv support
- database query builder
- error and exception handler for debugging

## WTF?
- place your routes in the `config/routes.php` file
- create your controllers under the `controllers` directory
- make your own views in the `views` folder

## Global functions
| Function                           | Description                |
|------------------------------------|----------------------------|
| env('PARAM_NAME', 'Default Value') | Read .env variables        |
| dd($variable)                      | var_dump() with <pre>      |
| db()                               | Get database query builder |

## Used packages
- [twig/twig](https://twig.symfony.com/)
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
- [clancats/hydrahon](https://github.com/ClanCats/Hydrahon)
- [filp/whoops](https://github.com/filp/whoops)