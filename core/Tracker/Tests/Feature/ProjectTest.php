<?php

namespace Core\Tracker\Tests\Feature;

use Core\Base\Tests\TestCase;
use Core\Tracker\Models\Project as Model;

class ProjectTest extends TestCase
{
    /**
     * the base url
     *
     * @var string
     */
    protected $base_url;

    /**
     * the data that will be sent in the request (create/update)
     *
     * @var array
     */
    protected $data;

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

        $this->base_url     = $this->getApiBaseUrl() . 'projects/';
        $this->data         = Model::factory()->make()->toArray();
        $this->json         = $this->getJsonStructure();
        $this->json['data'] = ['id'];

        foreach ($this->data as $key => $value) {
            $this->json['data'][] = $key;
        }
    }

    /**
     * create new entry
     *
     * @return Model
     */
    protected function getNewEntry()
    {
        return Model::factory()->create();
    }

    /**
     * get the id
     *
     * @return int
     */
    protected function getId()
    {
        return $this->getNewEntry()->id;
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function testItShouldGetListingOfTheResource()
    {
        $this->getNewEntry();
        $json              = $this->json;
        $json['data']      = [];
        $json['data']['*'] = $this->json['data'];

        $this->json('GET', $this->base_url, [], $this->getHeaders())
             ->assertStatus(200)
             ->assertJsonStructure($json);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function testItShouldStoreNewlyCreatedResource()
    {
        $this->json('POST', $this->base_url, $this->data, $this->getHeaders())
             ->assertStatus(201)
             ->assertJsonStructure($this->json);
    }

    /**
     * Display the specified resource.
     *
     * @return void
     */
    public function testItShouldGetSpecifiedResource()
    {
        $this->json('GET', $this->base_url . $this->getId(), [], $this->getHeaders())
             ->assertStatus(200)
             ->assertJsonStructure($this->json);
    }

    /**
     * update a resource in storage.
     *
     * @return void
     */
    public function testItShouldUpdateSpecifiedResource()
    {
        $this->json('PUT', $this->base_url . $this->getId(), $this->data, $this->getHeaders())
             ->assertStatus(200)
             ->assertJsonStructure($this->json);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return void
     */
    public function testItShouldRemoveSpecifiedResource()
    {
        $this->json['data'] = [];
        $this->json('DELETE', $this->base_url . $this->getId(), [], $this->getHeaders())
             ->assertStatus(200)
             ->assertJsonStructure($this->json);
    }
}
