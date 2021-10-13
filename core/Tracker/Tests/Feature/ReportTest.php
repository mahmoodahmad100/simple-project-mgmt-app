<?php

namespace Core\Tracker\Tests\Feature;

use Core\Base\Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * the base url
     *
     * @var string
     */
    protected $base_url;

    /**
     * the json response
     *
     * @var array
     */
    protected $json;

    /**
     * setting up
     *
     * @throws \ReflectionException
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->base_url = $this->getApiBaseUrl() . 'reports/';
        $this->json     = $this->getJsonStructure();
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function testItShouldGetListingOfTheResource()
    {
        $json         = $this->json;
        $json['data'] = [
            'projects' => [
                'count'
            ]
        ];

        $this->json('GET', $this->base_url, [], $this->getHeaders())
             ->assertStatus(200)
             ->assertJsonStructure($json);
    }
}
