<h1>#Intro</h1>
<p> Middleware acts as a bridge between a request and a response. It is a type of filtering mechanism. This chapter explains you the middleware mechanism in Laravel.
Laravel includes a middleware that verifies whether the user of the application is authenticated or not. If the user is authenticated, it redirects to the home page otherwise, if not, it redirects to the login page.

</p> 
<a>   <img src="public\assets\images\.middleware.jpeg" alt="middleware" style="width:auto;">  </a>

<h1>#Function</h1>

<p> Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.

Additional middleware can be written to perform a variety of tasks besides authentication. For example, a logging middleware might log all incoming requests to your application. There are several middleware included in the Laravel framework, including middleware for authentication and CSRF protection. All of these middleware are located in the app/Http/Middleware directory.

</p>


<h1>#A la fin</h1>
<p>Basically, the Middleware is a middleman between request and response. It is a type of filtering mechanism. For example, Laravel includes a middleware that verifies whether the user of the application is authenticated or not. If the user is authenticated, he will be redirected to the home page otherwise, he will be redirected to the login page.
</p>

<a>
To create a new middleware, use the:. php artisan make:middleware EnsureTokenIsValid

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
