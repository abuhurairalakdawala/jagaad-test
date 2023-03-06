<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function getForecast(string $cityName): array
    {
        $response = Http::withOptions(['verify'=>false])
                    ->get('http://api.weatherapi.com/v1/forecast.json?key=cd662aa2a97e4a2c9b0140401230303&q='. $cityName .'&days=2');

        if ($response->ok()) {
            return $response->json()['forecast']['forecastday'];
        }

        return [];
    }
}
