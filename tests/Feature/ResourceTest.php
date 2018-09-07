<?php

namespace Tests\Feature;

use App\School;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Torann\GeoIP\Facades\GeoIP;

class ResourceTest extends TestCase
{

    use DatabaseMigrations;


    private $resource;

    public function setup()
    {
        parent::setUp();
        $this->resource = create('App\Resource');

        $this->resource->targets()->saveMany(factory('App\Target', 3)->make());
        $this->resource->resource_types()->saveMany(factory('App\ResourceType', 3)->make());

    }

    /** @test */
    public function resource_should_be_visible()
    {


        $this->get("/resources")
            ->assertSee($this->resource->name)
            ->assertSee($this->resource->source);


    }

    /** @test */
    public function resource_has_targets()
    {

        $details = $this->get("/resources/" . $this->resource->id);

        foreach ($this->resource->targets()->get() as &$value) {
            $details->assertSee($value->name);
        }

    }

    /** @test */
    public function resource_has_resource_types()
    {

        $details = $this->get("/resources/" . $this->resource->id);

        foreach ($this->resource->resource_types()->get() as &$value) {
            $details->assertSee($value->name);
        }

    }

}


