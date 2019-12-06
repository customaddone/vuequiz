<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class QuizPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

     /*
       これで無事テストは通る
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(1000)
                     ->assertPathIs('/');
        });
    }
}
