<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class CheckoutControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_scan_response()
    {
        $response = $this->call('post','/scan');

        $response->assertStatus(200);
    }

    public function test_checkout_redirect()
    {
        $response = $this->call('get','/checkout');

        $response->assertStatus(302);

        $response->assertRedirect('/');
    }
}
