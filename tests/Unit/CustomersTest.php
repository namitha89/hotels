<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Customers;
use Illuminate\Http\Response;


class CustomersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_customer() {
        $customer = factory(Customers::class)->create();
        $data = [
            'name' => 'nami',
            'email' => 'nam@gmail.com'
        ];
        $result = $this->post(route('customers.store'), $data)
             ->assertStatus(201);
        

        
    }
    public function test_can_update_customer() {
        $customer = factory(Customers::class)->create();
        $data = [
            'name' => 'nami',
            'email' => 'nam@gmail.com'
        ];
        $this->put(route('customers.update', $customer->id), $data)
            ->assertStatus(201);
    }

    public function test_can_show_customer() {
        $customers = factory(Customers::class)->create();
        $this->get(route('customers.show', $customers->id))
            ->assertStatus(200);
    }

    public function test_can_list_customers() {
        $customers = factory(Customers::class, 2)->create()->map(function ($customers) {
            return $customers->only(['name', 'email']);
        });

        $this->get(route('customers.index'))
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => ['name', 'email'] ]
            ]);
    }
    
    
}
