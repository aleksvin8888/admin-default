<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

final class TagController extends BaseController
{
    private $tagService;

    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }


    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(CreateTagRequest $request)
    {
        $data = $request->validated();

        $this->tagService->create($data);

        return redirect()->route('admin.tags.index')->with('success', 'тег успешно добавлен');
    }


    public function show(Tag $tag)
    {

        return view('admin.tags.show', compact('tag'));
    }


    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }


    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $data = $request->validated();

        $this->tagService->update($tag, $data);

        return redirect()
            ->route('admin.tags.index')
            ->with('success', 'тег отредактирован');
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()
            ->route('admin.tags.index')
            ->with('success', 'тег удален');
    }

    public function adminTagsModalAjaxDelete($id)
    {
        $tag = Tag::find($id);

        return view('admin.tags.delete', compact('tag'));
    }
}
