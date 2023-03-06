<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CityService
{
    public function get(): array
    {
        $response = Http::withOptions(['verify'=>false])->withHeaders([
            'X-Musement-Application' => 'string',
            'X-Musement-Market' => 'us',
            'X-Musement-Version' => '3.4.0',
        ])->get('https://sandbox.musement.com/api/v3/cities?limit=10');

        if ($response->ok()) {
            return $response->json();
        }

        return [];
    }
}
