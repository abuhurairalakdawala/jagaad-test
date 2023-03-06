<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\HttpService;

class HttpServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHttp()
    {
        $httpService = app(HttpService::class);
        $response = $httpService->http(
            'https://sandbox.musement.com/api/v3/cities?limit=10',
            [
                'X-Musement-Application' => 'string',
                'X-Musement-Market' => 'us',
                'X-Musement-Version' => '3.4.0',
            ]
        );

        $this->assertNotEmpty($response->json());

        $this->assertCount(10, $response->json());

        $this->assertEquals($response->status(), 200);
    }
}
