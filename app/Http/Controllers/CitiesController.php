<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;
use App\Services\CityService;

class CitiesController extends Controller
{
    private $cityService;

    private $weatherService;

    public function __construct(CityService $cityService, WeatherService $weatherService)
    {
        $this->cityService = $cityService;
        $this->weatherService = $weatherService;
    }

    public function citiesWeather()
    {
        $cities = $this->cityService->get();
        foreach($cities as $city) {
            $weatherForecastData = $this->weatherService->getForecast($city['name']);

            echo 'Processed city '. $city['name'] . ' | ' .
                        $weatherForecastData[0]['day']['condition']['text'] . ' - ' .
                        $weatherForecastData[1]['day']['condition']['text'];
            echo '<br>';
        }
    }

    public function cityForecast($id)
    {
        // code...
    }
}
