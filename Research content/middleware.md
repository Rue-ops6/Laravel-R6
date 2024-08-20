<h1>#Intro</h1>
<p> Middleware acts as a bridge between a request and a response. It is a type of filtering mechanism. This chapter explains you the middleware mechanism in Laravel.
Laravel includes a middleware that verifies whether the user of the application is authenticated or not. If the user is authenticated, it redirects to the home page otherwise, if not, it redirects to the login page.

</p> 
<a>   <img src="public\assets\images\.middleware.jpeg" alt="middleware" style="width:auto;">  </a>

<h1>#Function</h1>

<p> Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.

Additional middleware can be written to perform a variety of tasks besides authentication. For example, a logging middleware might log all incoming requests to your application. There are several middleware included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the app/Http/Middleware directory.

Custom middleware in Laravel 11 provides a powerful way to intercept and process requests in your application. By following this guide, you can create and use custom middleware to add flexible and reusable logic to your Laravel projects.

<b>To create a new middleware, use the:. php artisan make:middleware EnsureTokenIsValid</b>
</p>

<h1>#Test Middleware</h1>
<p>Test the middleware by accessing the route with and without the age parameter to see the different outcomes.
</p>

<h1>#Additional Middleware Features</h1>
You can also perform other actions in middleware, such as modifying the request or response, logging, or conditionally applying the middleware based on certain criteria.


<h1>#A la fin</h1>
<p>Basically, the Middleware is a middleman between request and response. It is a type of filtering mechanism. For example, Laravel includes a middleware that verifies whether the user of the application is authenticated or not. If the user is authenticated, he will be redirected to the home page otherwise, he will be redirected to the login page.
</p>



<strong><em>Here are some reference links for creating custom middleware in Laravel 11:</em></strong>
<a>    Laravel Middleware Documentation: Official Laravel documentation on middleware, including how to create and use custom middleware.
    Laravel Middleware Tutorial: Create Custom Middleware in Laravel: A tutorial that explains how to create custom middleware in Laravel with examples.
    Laravel Middleware Example: Create Custom Middleware in Laravel: Another tutorial that demonstrates creating custom middleware in Laravel with step-by-step instructions.
    Laravel Middleware Explained: A detailed explanation of middleware in Laravel, including how to create custom middleware and use it in your application.
https://laravel.com/docs/9.x/middleware
https://laravel.com/docs/7.x/middleware
https://medium.com/@tutsmake.com/laravel-11-custom-middleware-example-21e51cd03085
https://www.tutorialspoint.com/laravel/laravel_middleware.htm
https://laracasts.com/series/laravel-from-scratch-2018/episodes/25
https://laracasts.com/series/php-for-beginners-2023-edition/episodes/39
https://laracasts.com/series/intermediate-laravel/episodes/8
https://laracasts.com/series/laravel-6-from-scratch/episodes/53
https://laracasts.com/discuss/channels/laravel/middleware-14

</a>
