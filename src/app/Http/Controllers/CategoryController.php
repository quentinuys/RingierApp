<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->toArray();
        return array_reverse($categories);
    }

    public function add(Request $request)
    {
        $categories = new Category([
            'name' => $request->input('name'),
            'slug' => $request->input('slug')
        ]);
        $categories->save();

        return response()->json('The category successfully added');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return response()->json($category);     
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return response()->json('The category successfully updated');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json('The category successfully deleted');
    }
}
