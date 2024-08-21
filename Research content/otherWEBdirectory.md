<h1>Make a customed route-web for side routes</h1>

<p> 1- we shall create a RouteServiceProvider in the namespace App\Providers; directory..

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

public function map()
{
    $this->mapApiRoutes();

    $this->mapWebRoutes();

    // Register your custom route file
    $this->mapCustomRoutes();
}

protected function mapCustomRoutes()
{
    Route::middleware('web')
         ->namespace($this->namespace)
         ->group(base_path('routes/custom.php'));
}

2- in that new route-web;
use Illuminate\Support\Facades\Route;

Route::get('/custom-route', function () {
    return 'This is a custom route!';
});


3-In new terminal
php artisan route:cache
php artisan config:cache

</p>

<a> 
https://chatgpt.com/c/c947bf1e-456a-4537-885a-5ff1bf4346b1

https://medium.com/@tutsmake.com/laravel-11-create-custom-route-file-tutorial-bcfb3abf0841
https://chatgpt.com/ </a>


