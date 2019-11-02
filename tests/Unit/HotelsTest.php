<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Hotels;
use App\Model\Locations;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class HotelsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use WithoutMiddleware;

    public function test_can_create_hotel()
    {
        $this->withoutMiddleware();
        // given we have a registered user
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'secret'),]
        );
        $locations = factory(Locations::class)->create();
        // when this user tries to create a new hotel
        $this->call("POST", route('hotels.store'), [
            "name" => "Amazing book of REST APIs",
            "rating" => "5",
            "category" => "lodge",
            "image" => "https://www.google.com/url?sa=i&source=imgres&cd=&ved=2ahUKEwjC6uy538blAhVJIlAKHcZeDqEQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.ihg.com%2Fevenhotels%2Fhotels%2Fus%2Fen%2Feugene%2Feugev%2Fhoteldetail&psig=AOvVaw2UbZOHBj1r6yOZlg6zzcJs&ust=1572619806642434",
            "reputation" => "900",
            "location_id" => $locations->id,
            'user_id' => $user->id
        ],[], [], [
            "HTTP_Authorization" => "Bearer " . base64_encode($user->username . ":" . "secret"),
            "PHP_AUTH_USER" => $user->username, // must add this header since PHP won't set it correctly
            "PHP_AUTH_PW" => "secret" // must add this header since PHP won't set it correctly as well
        ]);
        $this->assertTrue(true);
    }

   
}
