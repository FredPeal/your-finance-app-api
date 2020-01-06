<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use GuzzleHttp\Client;
class SignUpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public $password, $email;

    public function testSignUp()
    {
        $client = new Client(['base_uri' => 'https://randomuser.me/']);
        $response = $client->request('GET', 'api/');
        $body = $response->getBody();
        $body = json_decode($body);
        $data =  [
            'first_name' => $body->results[0]->name->first,
            'last_name' => $body->results[0]->name->last,
            'name' => $body->results[0]->login->username,
            'email' => $body->results[0]->email,
            'password' => $body->results[0]->login->password,
            'phone' => $body->results[0]->phone
        ];

        $response = $this->withHeaders([
            'Content-Type', 'application/json',
            'Accept', 'application/json'
        ])->json('POST', '/api/sign-up', $data);
        $response->assertStatus(200);
    }

    // public function testLogin()
    // {

    // }
}
