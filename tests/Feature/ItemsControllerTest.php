<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Item;
use App\Http\Controllers\ItemsController;

class ItemsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function itemsControllerTest()
    {
        // コントローラーのアクションを使いたい時はItemsControllerインスタンスを生成する
        $item = new ItemsController;
        $this->assertNotEmpty($item->index());
    }
}
