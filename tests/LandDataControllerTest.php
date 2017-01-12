<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class LandDataControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $credentials = [ 'email' => 'RtS0f0IbU7@gmail.com', 'password' => 'secret' ];
        Auth::shouldReceive('attempt')->once()->with($credentials, true)->andReturn(true);
        $this->call('GET', '/land/verify');
        $this->assertRedirectedToRoute('login');
        }

}
