<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
        // with(結びつけるテーブルの名前)でリレーション付けたデータが追加される
        $items = Item::with('explanations')->get();
        return $items;
    }

    public function store(Request $request)
    {
        $item = new Item;
        $form = $request->all();
        $item->fill($form)->save();
        return $item;
    }

    public function edit(Request $request, $id)
    {
        $item = Item::find($id);
        $form = $request->all();
        $item->fill($form)->save();
        return $item;
    }

    public function destroy($id) {
        $item = Item::find($id)->delete();
    }

    // クイズ用にアイテムをランダムに１０個引っ張ってくる
    public function items10()
    {
        $items = [];
        for ( $i = 0;  $i < 10; $i++ ) {
            $items_group = Item::inRandomOrder()->take(4)->with('explanations')->get();
            array_push($items, $items_group);
        }
        return $items;
    }

}
