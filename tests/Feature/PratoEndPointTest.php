<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Prato extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testMissingParameters()
    {
       // $this->withoutExceptionHandling();

        $response = $this->json('GET', '/api/cardapios');

        $response->assertStatus(500);


    }
    public function testMissingParameterPrato()
    {

        $response = $this->Json('GET','/api/cardapio');

        $response->assertStatus(500);

    }  
}
