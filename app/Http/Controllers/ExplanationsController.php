<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Explanation;

class ExplanationsController extends Controller
{
    public function index()
    {
        $items = Explanation::all();
        return $items;
    }

    public function store(Request $request)
    {
        $item = new Explanation;
        $form = $request->all();
        $item->fill($form)->save();
        return $item;
    }

    public function edit(Request $request, $id)
    {
        $item = Explanation::find($id);
        $form = $request->all();
        $item->fill($form)->save();
        return $item;
    }

    public function destroy($id) {
        $item = Explanation::find($id)->delete();
    }
}
