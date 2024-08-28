
<h1># Intro</h1>
<p>
Laravel allows you to easily create queued jobs that may be processed in the background. By moving time intensive tasks to a queue, your application can respond to web requests with blazing speed and provide a better user experience to your customers. Laravel queues provide a unified queueing API across a variety of different queue backends, such as Amazon SQS, Redis, or even a relational database.

If your queued job accepts an Eloquent model in its constructor, only the identifier for the model will be serialized onto the queue. When the job is actually handled, the queue system will automatically re-retrieve the full model instance and its loaded relationships from the database. This approach to model serialization allows for much smaller job payloads to be sent to your queue driver.

handle Method Dependency Injection

The handle method is invoked when the job is processed by the queue. Note that we are able to type-hint dependencies on the handle method of the job. The Laravel service container automatically injects these dependencies.

If you would like to take total control over how the container injects dependencies into the handle method, you may use the container's bindMethod method. The bindMethod method accepts a callback which receives the job and the container. Within the callback, you are free to invoke the handle method however you wish. Typically, you should call this method from the boot method of your App\Providers\AppServiceProvider... Binary data, such as raw image contents, should be passed through the base64_encode function before being passed to a queued job. Otherwise, the job may not properly serialize to JSON when being placed on the queue.


</p>

<h1># Connections vs. Queues</h1>
<p> Before getting started with Laravel queues, it is important to understand the distinction between "connections" and "queues". In your config/queue.php configuration file, there is a connections configuration array. This option defines the connections to backend queue services such as Amazon SQS, Beanstalk, or Redis. However, any given queue connection may have multiple "queues" which may be thought of as different stacks or piles of queued jobs. Note that each connection configuration example in the queue configuration file contains a queue attribute. This is the default queue that jobs will be dispatched to when they are sent to a given connection. </p>

<h1># Queued Relationships</h1>
Because all loaded Eloquent model relationships also get serialized when a job is queued, the serialized job string can sometimes become quite large. Furthermore, when a job is deserialized and model relationships are re-retrieved from the database, they will be retrieved in their entirety. Any previous relationship constraints that were applied before the model was serialized during the job queueing process will not be applied when the job is deserialized. Therefore, if you wish to work with a subset of a given relationship, you should re-constrain that relationship within your queued job.Or, to prevent relations from being serialized, you can call the withoutRelations method on the model when setting a property value. 



<h1># Steps</h1>
<p> 
1) config/queue.php
2) use App\Jobs\ProcessPodcast;
// This job is sent to the default connection's default queue...
ProcessPodcast::dispatch();
// This job is sent to the default connection's "emails" queue...
ProcessPodcast::dispatch()->onQueue('emails');
3) php artisan queue:work --queue=high,default
4)php artisan make:queue-table
 php artisan migrate
5) config/database.php
6) php artisan make:job ProcessPodcast
7)

</p>

<p><i>
Laravel's queue configuration options are stored in your application's config/queue.php configuration file. In this file, you will find connection configurations for each of the queue drivers that are included with the framework, including the database, Amazon SQS, Redis, and Beanstalkd drivers, as well as a synchronous driver that will execute jobs immediately (for use during local development). A null queue driver is also included which discards queued jobs. </i></p>

<a>    
https://laravel.com/docs/11.x/queues
</a>
