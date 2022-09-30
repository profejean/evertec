<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;
use App\Models\User;


class OrderTest extends TestCase
{
    use RefreshDatabase,WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_user_can_read_all_the_orders()
    {
        $user = User::factory()->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);

        //Given we have order in the database
        $order = Order::factory()->create();

        //When user visit the order page
        $response = $this->get('/orders');

        //He should be able to read the order
        $response->assertSee($order->customer_name);
    }

    public function test_a_user_can_read_single_order()
    {
        $user = User::factory()->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);

        //Given we have order in the database
        $order = Order::factory()->create();
        $lastOrder = Order::latest()->first()->id;
        //When user visit the order page
        $response = $this->get('/order/'.$lastOrder);

        //He should be able to read the order
        $response->assertSee($order->customer_name);
    }
}
