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
}
// it('',function() {
//     getJson('/cardapios')->assertStatus(200);
// });
