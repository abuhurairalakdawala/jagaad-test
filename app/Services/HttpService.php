<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HttpService
{
    public function http(string $url, array $headers = [])
    {
        return Http::withOptions(['verify'=>false])->withHeaders($headers)->get($url);
    }
}
