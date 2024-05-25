<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("categories",["categories"=>$categories]);
    }

    public function store(CategoryRequest $request)
    {
        $category = $request->only(["name"]);
        Category::create($category);
        return redirect("/categories")->with("message","カテゴリを作成しました");
    }

    public function update(CategoryRequest $request)
    {
        $Category = $request->only(["name"]);
        Category::find($request->id)->update($Category);
        return redirect("/categories")->with("message", "カテゴリを変更しました");
    }

    public function delete(Request $request)
    {
        Category::find($request->id)->delete();
        return redirect("/categories")->with("message", "カテゴリを削除しました");
    }
}
