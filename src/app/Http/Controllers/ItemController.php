<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = item::all()->toArray();
        return array_reverse($items);
    }

    public function add(Request $request)
    {
        $items = new item([
            'name' => $request->input('name'),
            'slug' => $request->input('slug')
        ]);
        $items->save();

        return response()->json('The item successfully added');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return response()->json($item);     
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->all());

        return response()->json('The item successfully updated');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();

        return response()->json('The item successfully deleted');
    }
}
