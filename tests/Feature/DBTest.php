<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
use DatabaseMigrations;

   public function testDatabase()
   {
    // Make call to application...
    $user = factory(App\User::class)->create();
    $user = factory(App\User::class)->create([
       'name' => 'Abigail',
    ]);

   }
//   $this->seeInDatabase('users', ['email' => 'sally@example.com']);
/*
     $this->assertDatabaseHas('users', [
         'email' => 'sally@example.com'
     ]);
*/
/*

   $this->visit('/')
         ->see('Laravel 5');
   }
*/
}
?>