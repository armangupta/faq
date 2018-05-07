<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testSession()
    {
        $response = $this->withSession(['foo' => 'bar'])
            ->get('/');
        $response->assertStatus(200);
        $response->assertDontSee('joe');

    }
    public function testDocument()
    {
        $response = $this->get('/document');
        $response->assertNotFound();
    }
}