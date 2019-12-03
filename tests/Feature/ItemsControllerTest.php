<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
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

        // ログイン
        $user = factory(User::class)->create();
        $this->be($user);
        $this->assertNotEmpty(Auth::id());

        // itemの作成、編集
        $request = new Request;
        $request->merge([
            'user_id' => '1',
            'item_name' => 'title',
        ]);
        $this->assertNotEmpty($item->store($request));

        // itemの編集
        $editRequest = new Request;
        $editRequest->merge([
            'user_id' => '2',
            'item_name' => 'dummyTitle',
        ]);
        $testDataId = Item::where('item_name', 'title')
                          ->first()
                          ->value('id');
        $this->assertNotEmpty($item->edit($editRequest, $testDataId));
        $this->assertEquals(Item::find($testDataId)->item_name, 'dummyTitle');

        Item::where('item_name', 'dummyTitle')->delete();

        // クイズ用アイテム生成のテスト
        $this->assertEquals(count($item->items10()), 10);

    }
}
