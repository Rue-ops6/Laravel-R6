<h1>#Intro</h1>


<p> Put and Patch methods can significantly impact how resources are updated. "Patch updates a piece of a record. Put replaces it altogether" meaning; Put is when you update the whole model and use patch when you want to update a portion or single attribute. For instance, a user may have a username they change that is stored on the user model. You would patch just the username when they change it. If you would like to replace the whole user model with a new user model you would use a put request.  
</p>


<h1>#Put</h1>

<p> 

* The PUT method is typically employed for updating or creating a resource at a specific URL. One of its key attributes is its idempotent nature, which means that making multiple identical requests should yield the same outcome as a single request. When utilizing the PUT method in Laravel, the entire resource must be included in the request payload, replacing the existing resource or creating a new one if it doesn't already exist. </p> 

<h1>#Patch</h1>

<p> 

* In contrast to PUT, the PATCH method is geared towards making partial updates to a resource. This means that only specific fields of the resource are modified, leaving the rest unchanged. The flexibility offered by PATCH makes it an ideal choice for scenarios where you only need to update certain attributes of a resource without affecting others. 

* There's also another incarnation of Patch called "Json-patch", which dictates how to communicate changes rather than just values. Unlike regular Patching, this offers the ability to update aspects of nested records rather than replace them wholesale.

* In anotherway  replace parts of the source resource with the values provided AND|OR other parts of the resource are updated that you havent provided (timestamps) AND|OR updating the resource effects other resources (relationships). Thus, Patch is way handy. 
 </p>


<a> 

https://williamdurand.fr/2014/02/14/please-dont-patch-like-that/ </a>

