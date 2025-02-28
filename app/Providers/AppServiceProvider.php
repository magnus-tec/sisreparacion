<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SystemInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->booted(function () {
            $router = $this->app['router'];

            $router->middleware('web')
                ->group(base_path('routes/web.php'));

            $router->middleware('web')
                ->group(base_path('routes/auth.php')); // Añade esta línea

            // ... otras definiciones de rutas
        });
       View::composer('*' , function ($view) {
        $view->with('systemInfo', new SystemInfo());
       });
    }
}
