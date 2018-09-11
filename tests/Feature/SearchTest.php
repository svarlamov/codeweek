<?php
namespace Tests\Feature;
use App\Resource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class SearchTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_search_resources()
    {
        config(['scout.driver' => 'algolia']);
        create('App\Resource', [], 2);
        create('App\Resource', ['name' => 'A resource with the foobar term.'], 2);
        do {
            // Account for latency.
            sleep(.25);

            $results = $this->getJson('/resources/search?q=foobar')->json()['data'];
        } while (empty($results));
        $this->assertCount(2, $results);
        // Clean up.
        Resource::latest()->take(4)->unsearchable();
    }
}