<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web:[__DIR__.'/../routes/web.php', __DIR__.'/../routes/cars.php', __DIR__.'/../routes/sidecodes.php'],
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([            'CheckAge' => \App\Http\Middleware\EnsureTokenIsValid::class,        ]);
        $middleware->alias([            'CheckAge' => \App\Http\Middleware\BeforeMiddleware::class,        ]);
        $middleware->alias([            'CheckAge' => \App\Http\Middleware\AfterMiddleware::class,        ]);
        $middleware->alias([            'CheckAge' => \App\Http\Middleware\CheckAge::class,        ]);

        // M camara - langs

$middleware->alias([
            /**** OTHER MIDDLEWARE ALIASES ****/
            'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
            'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
        ]);
    })

        ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


