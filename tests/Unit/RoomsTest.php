<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Hotels;
use App\Model\Locations;
use App\Model\Rooms;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoomsTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_can_create_room() {
        $this->withoutMiddleware();
        $user = factory(User::class)->create();
        $locations = factory(Locations::class)->create();
        $hotel = factory(Hotels::class)->create();
        $room = factory(Rooms::class)->create();
        $data = [
            'room_name' => 'Lake view room',
            'room_type' => 'single',
            'room_price' => 3432,
            'hotels_id' => $hotel->id
        ];
        $this->post(route('rooms.store'), $data);
        $this->assertTrue(true);
        
    }

    public function test_can_list_rooms() {
        $this->withoutMiddleware();
        $user = factory(User::class)->create();
        $locations = factory(Locations::class)->create();
        $hotel = factory(Hotels::class)->create();
        $rooms = factory(Rooms::class, 2)->create()->map(function ($rooms) {
            return $rooms->only(['roomname', 'roomtype']);
        });
        
        $this->get(route('rooms.index'))
            ->assertStatus(200);
     
    }
    
}
