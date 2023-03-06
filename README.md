#### This project is built in Laravel Framework.

1) Follow below 2 steps for installation

- `composer install`
- `php artisan key:generate`

2) Now run the below command to start the application

`php artisan serve`

Visit `http://localhost:8000/` to see the list of cities and forecast of next 2 days.

3) To run unit test, run the cmd below

`vendor/bin/phpunit --filter HttpServiceTest`