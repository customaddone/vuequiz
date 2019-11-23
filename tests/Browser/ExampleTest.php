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
        　① 追加機能 （成功後スクリーンショットして「hello.img」の名前で保存）
        　② 削除機能
        　共にテストが通る
          dusk=""でボタンを指定すると画面上の一番最初のボタンが選択されるみたい
        */
        $this->browse(function ($first, $second) {
            $first->visit('/')
                  ->type('addvalue', 'hello')
                  ->press('addbutton')
                  ->pause(100)
                  ->assertSee('hello')
                  ->screenshot('hello.img')

                  ->press('@trash')
                  ->pause(100)
                  ->assertDontSee('hello');
        });


    }
}
