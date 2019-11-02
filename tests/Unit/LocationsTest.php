<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Locations;
use Illuminate\Http\Response;


class LocationsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_locations() {
        $locations = factory(Locations::class)->create();
        $data = [
            'city' => 'tumkur',
            'state' => 'Karnataka',
            'country' => 'country',
            'zip_code' => "3435435",
            'address' => 'Ashok nagar',
        ];
        $this->post(route('locations.store'), $data)
            ->assertStatus(201);

        
    }
    public function test_can_update_location() {
        $location = factory(Locations::class)->create();
        $data = [
            'city' => 'tumkur',
            'state' => 'Karnataka',
            'country' => 'country',
            'zip_code' => "3435435",
            'address' => 'Ashok nagar',
        ];
        $this->put(route('locations.update', $location->id), $data)
            ->assertStatus(201);
    }

    public function test_can_show_location() {
        $locations = factory(Locations::class)->create();
        $this->get(route('locations.show', $locations->id))
            ->assertStatus(200);
    }

    public function test_can_list_locations() {
        $locations = factory(Locations::class, 2)->create()->map(function ($locations) {
            return $locations->only(['city', 'state', 'country']);
        });

        $this->get(route('locations.index'))
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => ['city', 'state', 'country'] ]
            ]);
    }
    
    
}
