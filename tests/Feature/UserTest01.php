<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest01 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

/*        $response = $this->get('/');

        $response->assertStatus(200);
*/
       $response = $this->withSession(['foo' => 'bar'])
                         ->get('/');
    }
}
