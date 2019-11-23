<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return $items;
    }

    public function store(Request $request)
    {
        $item = new Item;
        $form = $request->all();
        $item->fill($form)->save();
        return $item;
    }

    public function destroy($id) {
        $item = Item::find($id)->delete();
    }
}
