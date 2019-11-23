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
                  ->pause(1000)
                  ->assertSee('hello')

                  // 説明文追加、削除
                  ->press('.uk-accordion-title')
                  ->pause(1000)
                  ->type('add_explanation', 'nice')
                  ->press('add_explanation_button')
                  ->pause(1000)
                  ->screenshot('hello.img')
                  ->assertSee('nice')
                  ->press('@trash_explanation')
                  ->pause(1000)
                  ->assertDontSee('nice')
                  ->press('.uk-accordion-title')
                  ->pause(1000)

                  // アイテム削除
                  ->press('@trash');
        });


    }
}
