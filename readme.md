For my final project I decided to add a rating feature.

Unfortunately, the rating feature needs to be added to a blog based Laravel framework,
and needs to be started from scratch. Therefore, this feature could not be added to
mini project 3.

The new project is created with the following command:
composer create-project --prefer-dist laravel/laravel blog

For this feature, I add to download an additional Laravel package called ratable:
composer require laravel-rateable

The ratable provider had to be added to the configurations file:
willvincent\Rateable\RateableServiceProvider::class,

Next, I generated and ran a new migration.
php artisan rateable:migration
php artisan migrate

Then, I generated a default authorization and created a migration for posts:
php artisan make:auth
php artisan make:migration create_posts_table

After this, I had to edit the migrations file for the create posts table.

I created a model for posts, edited the file and created new routes.
I then created the controller method, and added the blade files.

The result was a blog like page which the user can rate the post out of 5 starts.
Each rating was added to an average, and the rating displayed on the posts page
was an average of all ratings.

I was dissapointed I wasn't able to get the result I had hoped for, but
I learned a lot and the result was still pretty cool!


