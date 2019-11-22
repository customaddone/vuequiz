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
        　SPAに移行後
         しっかりLaravelもItem 1も見える
        */
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->assertSee('Item 1');
        });
    }
}
