<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BigButtonTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
/*
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
*/

      $this->browse(function ($browser) {
             $browser->visit('/sales-page')
             ->clickLink('Try it now!')
             ->assertSee('Sign up for trial')
             ->assertPathIs('/trial-signup');
      });

    }
}
