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
        　duskを使ってブラウザテスト
          name="addvalue"のフィールドにhelloを打ち、name="addbutton"のボタンを押す
          helloという文字が...出てこないですね
        */
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('addvalue', 'hello')
                    ->press('addbutton')
                    ->assertSee('hello');
        });
    }
}
