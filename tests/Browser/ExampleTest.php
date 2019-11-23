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
        　アイテムに説明文を追加
        　①　アイテム「hello」を追加
        　②　helloの説明文「nice」を追加
        　③　helloの説明文「nice」を削除
        　④　helloを削除
        */
        $this->browse(function (Browser $browser) {
            $browser->visit('/#/addItems')
                  // アイテム追加
                  ->type('add_value', 'hello')
                  ->press('add_button')
                  ->pause(100)
                  ->assertSee('1 items')

                  // 説明文追加、削除
                  ->press('.uk-accordion-title')
                  ->pause(100)
                  ->type('add_explanation', 'nice')
                  ->press('add_explanation_button')
                  ->pause(100)
                  ->assertSee('nice')
                  ->screenshot('hello.img')
                  ->press('@trash_explanation')
                  ->pause(100)
                  ->assertDontSee('nice')
                  ->press('.uk-accordion-title')
                  ->pause(100)

                  // アイテム削除
                  ->press('@trash')
                  ->pause(100)
                  ->assertDontSee('hello');
        });


    }
}
