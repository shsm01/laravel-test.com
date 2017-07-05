<?
// namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{

   public function testLinksTable()
   {

//       $users = DB::table('users')->count();
//       echo $users;


//      $this->seeInDatabase('links', ['title' => 'dotdev.co']);
      factory(App\User::class)->create([
         'name' => 'Abigail03',
         'email' => 'test@test.com',
         'password' => '123456',
      ]);

/*
     $user = factory(App\User::class)->create([
       'name' => 'Abigail',
     ]);
*/

      $this->assertDatabaseHas('users', ['name' => 'Abigail03']);
   }

}

?>