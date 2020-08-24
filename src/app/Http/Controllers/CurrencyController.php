<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all()->toArray();
        return array_reverse($currencies);
    }

    public function add(Request $request)
    {
        $currencies = new Currency([
            'name' => $request->input('name'),
            'slug' => $request->input('slug')
        ]);
        $currencies->save();

        return response()->json('The Currency successfully added');
    }

    public function edit($id)
    {
        $currency = Currency::find($id);
        return response()->json($currency);     
    }

    public function update(Request $request, $id)
    {
        $currency = Currency::find($id);
        $currency->update($request->all());

        return response()->json('The Currency successfully updated');
    }

    public function delete($id)
    {
        $currency = Currency::find($id);
        $currency->delete();

        return response()->json('The Currency successfully deleted');
    }
}
