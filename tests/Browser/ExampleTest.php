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
        　各アイテムについての説明文が表示され...ない！！
        */
        $this->browse(function ($first, $second) {
            $first->visit('/')
                  ->type('addvalue', 'hello')
                  ->press('addbutton')
                  ->pause(100)
                  ->assertSee('hello')

                  ->press('.uk-accordion-title')
                  ->pause(100)
                  ->screenshot('hello.img')
                  ->assertSee('explanation 1')
                  ->press('.uk-accordion-title')

                  ->press('@trash')
                  ->pause(100)
                  ->assertDontSee('hello');
        });


    }
}
