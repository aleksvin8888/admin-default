<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

final class PostController extends BaseController
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }


    public function store(CreatePostRequest $request)
    {
        $data = $request->validated();

        $this->postService->create($data);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'пост успешно добавлен');

    }


    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.posts.edit', compact('post','categories' ));
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        $this->postService->update($post, $data);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Пост успешно изменен');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Пост успешно удален');
    }

    public function adminPostsModalAjaxDelete($id)
    {
        $post = Post::find($id);

        return view('admin.posts.delete', compact('post'));
    }
}
