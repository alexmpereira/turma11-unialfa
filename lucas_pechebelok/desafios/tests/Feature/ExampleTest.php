<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_the_application_returns_a_successful_response()
=======
    public function test_example()
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
