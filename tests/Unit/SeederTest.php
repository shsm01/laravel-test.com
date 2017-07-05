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
      factory(App\Link::class)->create([
          'title' => 'dotdev.co',
      ]);

/*
     $user = factory(App\User::class)->create([
       'name' => 'Abigail',
     ]);
*/

      $this->assertDatabaseHas('links', ['title' => 'dotdev.co']);
   }

}

?>