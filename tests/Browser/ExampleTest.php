<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        /*
        　アイテムの名前を記入　→　下のリストに表示
        */
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('addvalue', 'hello')
                    ->press('addbutton')
                    ->assertSee('hello');
        });
    }
}
