<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class AuthTest extends TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */

    /**
     * Test login functionality
     *
     * @return
     */
    public function testLogin()
    {
      $this->visit('/login')
           ->see('email');
    }
}
