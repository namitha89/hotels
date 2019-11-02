<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,5)->create();
        factory(App\Model\Customers::class,30)->create();
        factory(App\Model\Locations::class,30)->create();
        factory(App\Model\Hotels::class,30)->create();
        factory(App\Model\Rooms::class,60)->create();
        factory(App\Model\Bookings::class,10)->create();
    }
}
