### Developer Name: Abu Huraira Lakdawala
#### This project is built in Laravel Framework.

1) Follow below 2 steps for installation

- `composer install`
- `php artisan key:generate`

2) Now run the below command to start the application

`php artisan serve`

Visit `http://localhost:8000/` to see the list of cities and forecast of next 2 days.

3) To run unit test, run the cmd below

`vendor/bin/phpunit --filter HttpServiceTest`


4) #### Api endpoints to read the forecast for a specific city

##### Endpoint `/forecast/city/{id}`
##### Sample Response
````
{
    'city': 'Amsterdam',
    'forecast': [{
        'today': 'Sunny'
        'tomorrow': 'Cloudy'
    }]
}
````

5) #### Api endpoints to update the forecast for a specific city

##### Endpoint `/forecast/city`
##### Sample Parameters
````
{
    'city_id': 1,
    'forecast': [{
        'today': 'Sunny'
        'tomorrow': 'Cloudy'
    }]
}
````