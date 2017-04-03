<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Support\Facades\Route;

class AdminRoutes
{
    public function map(Registrar $router)
    {
        $guard = env('ADMIN_AUTH', 'admin');
        $router->group(['domain' => env('ADMIN_DOMAIN', 'laravel-demo.cn'), 'middleware' => ['web'], 'namespace' => 'Admin' ], function ($router) use ($guard) {
            $router->get('/', ['uses' => 'SiteController@index']);
            $router->post('site/menu', ['uses' => 'SiteController@getMenu']);
            $router->get('site/home', ['uses' => 'SiteController@home']);

            $router->get('site/t1', ['uses' => 'SiteController@t1']);
            $router->get('site/t2', ['uses' => 'SiteController@t2']);
        });
    }
}