<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function IndexAction(Request $request) {
        return view('pages.category', [
            'title' => 'Категории',
            'categories' => Category::paginate(20)
        ]);
    }

    public function StoreAction(Request $request) {
        $data = $request->all();
        $category = new Category();
        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->keywords = $data['keywords'];
        $category->key = $data['key'];
        $category->save();

        return response()->redirectTo('/categories');
    }

    public function DeleteActions(Request $request, $id) {
        $category = Category::find($id);
        $category->delete();
        return response()->redirectTo('/categories');
    }
}
