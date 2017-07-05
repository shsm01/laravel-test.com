<?php

use Tests\TestCase;

use Laravel\Dusk\Browser;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{

use Browser;

    public function testWeSeeAListOfLinks()
    {
        factory(App\Link::class)->create([
            'title' => 'dotdev.co',
        ]);

// $foo = new Browser();
        $this->visit('/')
             ->see('dotdev.co');
    }
}

?>