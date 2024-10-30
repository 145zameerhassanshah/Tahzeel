<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\Admin;
use App\Http\Middleware\CheckUserStatus;
use App\Http\Middleware\User;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'status'=>CheckUserStatus::class,
            'admin'=>Admin::class,
            'user'=>User::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
