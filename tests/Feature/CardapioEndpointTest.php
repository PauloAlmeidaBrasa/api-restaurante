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
    public function testMissingLimitParameter()
    {
       // $this->withoutExceptionHandling();
       $params = [
        'offset' => 1
        // 'limit' => 
       ];

        $response = $this->json('GET', '/api/cardapios',$params);

        $response->assertStatus(500)
             ->assertJson([
                 'message' => 'Parameter limit is missing'
             ]);


    }
    public function testMissingOffsetParameter()
    {

       $params = [
        'limit' => 50
        // 'offser' => 
       ];

        $response = $this->json('GET', '/api/cardapios',$params);

        $response->assertStatus(500)
             ->assertJson([
                 'message' => 'Parameter offset is missing'
             ]);

    }
    public function testSuccessCardapios()
    {
        //$this->withoutExceptionHandling();
        $params = [
            'limit' => 50,
            'offset' =>  0
        ];
    
        $response = $this->json('GET', '/api/cardapios',$params);

        $response->assertStatus(200);

    }    
   /*  public function testSuccessCardapio()
    {
        $response = $this->Json('GET','/api/cardapio',['id' => 1]);

        $response->assertStatus(200);
    } */
}
