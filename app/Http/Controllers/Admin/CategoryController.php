<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Services\CategoryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

final class CategoryController extends BaseController
{

    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(CreateCategoryRequest $request)
    {
        $data = $request->validated();

        $this->categoryService->create($data);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'категория успешно добавлена');
    }


    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        $this->categoryService->update($category, $data);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Категория изменина');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect(route('admin.categories.index'))->with('success', 'Категория удалена');
    }

    public function adminTagsModalAjaxDelete($id)
    {
        $tag = Tag::find($id);

        return view('admin.tags.delete', compact('tag'));
    }
}
