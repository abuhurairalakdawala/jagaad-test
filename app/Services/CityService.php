<?php

namespace App\Services;

class CityService extends HttpService
{
    public function get(): array
    {
        $response = $this->http(
            'https://sandbox.musement.com/api/v3/cities?limit=10',
            [
                'X-Musement-Application' => 'string',
                'X-Musement-Market' => 'us',
                'X-Musement-Version' => '3.4.0',
            ]
        );

        if ($response->ok()) {
            return $response->json();
        }

        return [];
    }
}
