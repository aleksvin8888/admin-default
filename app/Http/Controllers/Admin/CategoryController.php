<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CreateCategoryRequest $request)
    {

        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        $category = Category::make($data);
        $category->slug = $data['slug'];

        $category->save();

        return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        $category->slug = $data['slug'];

        $category->update($data);

        return redirect(route('admin.categories.index'))->with('success', 'Категория изменина');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect(route('admin.categories.index'))->with('success', 'Категория удалена');
    }

    public function adminCategoriesModalAjaxDelete($id)
    {
        $category = Category::find($id);

        return view('admin.category.delete', compact('category'));
    }
}
