<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CardapioEndpointTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMissingParameters()
    {
       // $this->withoutExceptionHandling();

        $response = $this->json('GET', '/api/cardapios');
        //dd($response->getContent());

        $response->assertStatus(500);


    }
    public function testMissingParameterCardapio()
    {
       // $this->withoutExceptionHandling();

        //$response = $this->json('GET', '/api/cardapio');
        //dd($response->getContent());
        $response = $this->Json('GET','/api/cardapio');

        $response->assertStatus(500);


    }    
    public function testSuccessCardapio()
    {
       // $this->withoutExceptionHandling();

        //$response = $this->json('GET', '/api/cardapio');
        //dd($response->getContent());
        $response = $this->Json('GET','/api/cardapio',['id' => 1]);

        $response->assertStatus(200);


    }
}
// it('',function() {
//     getJson('/cardapios')->assertStatus(200);
// });
