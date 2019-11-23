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
        　アイテム追加　→　アコーディオン展開　→　アイテム削除
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
                  ->assertSee('Lorem')
                  ->press('.uk-accordion-title')

                  ->press('@trash')
                  ->pause(100)
                  ->assertDontSee('hello');
        });


    }
}
