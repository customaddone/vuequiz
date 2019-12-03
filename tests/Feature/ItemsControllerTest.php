<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Item;
use App\Http\Controllers\ItemsController;
use App\User;
use Illuminate\Support\Facades\Auth;

class ItemsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        // コントローラーのアクションを使いたい時はItemsControllerインスタンスを生成する
        $item = new ItemsController;
        $this->assertNotEmpty($item->index());
        // ログイン
        $user = factory(User::class)->create();
        $this->be($user);
        $this->assertNotEmpty(Auth::id());

    }
}
