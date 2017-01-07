<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\ResponseRedirect;


class LandDataControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        Auth::shouldReceive('check')->once()->andReturn(false);
        $response = $this->call('GET', 'home');
        //$this->assertRedirectedTo('login');
        $this->assertFalse($response->isOk());

        // Make sure you've been redirected.
        //$this->assertTrue($response->isRedirection());
    }

    public function testUserIsAuthenticated()
    {
        Auth::shouldReceive('check')->once()->andReturn(true);

        $this->call('GET', 'home');

        $this->assertResponseOk();
    }
}
