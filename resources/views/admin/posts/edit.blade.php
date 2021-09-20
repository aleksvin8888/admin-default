@extends('admin.layouts.app')

@section('title', 'Редактировать пост')
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
    <li class="breadcrumb-item active">Редактировать пост</li>
@endsection

@section('mainContent')
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-lg-10 mb-2">
                    <label for="title" class="col-xs-2 control-label">Названия:</label>
                    <div class="col-xs-8">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title"
                               value="{{old('title', $post->title)}}">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-lg-10 mb-2">
                    <label for="content" class="col-xs-2 control-label">Контент:</label>
                    <div class="col-xs-8">
                        <textarea type="text" name="content" id="content" class="form-control summernote" placeholder="Enter content" >
                            {{old('content', $post->content)}}
                        </textarea>
                        @error('content')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-lg-10 mb-2">
                    <label for="category_id" class="col-xs-2 control-label">Категория:</label>
                    <div class="col-xs-8">
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="{{$post->category_id}}">{{$post->category->title}}</option>
                            @foreach($categories as $category)
                                <option @if($category->id == old('category_id')) selected
                                        @endif value="{{ $category->id }}">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-lg-10 mb-2 ">
                    <label for="tags_id" class="control-label ">Теги:</label>
                    <div>
                        <select class="select2 form-control"
                                multiple="multiple"
                                id="tags_id"
                                name="tag_ids[]"
                                style="width: 100%">
                            @foreach($tags as $tag)
                                <option
                                    {{is_array($post->tags->pluck('id')->toArray())
                                        && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}}
                                    value="{{$tag->id}}">
                                    {{$tag->title}}
                                </option>
                            @endforeach
                        </select>
                        @error('tag_ids')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class=" form-group col-lg-5 mb-2">
                    <div class="w-25">
                        <img src="{{ asset('storage/'. $post->main_image)  }}" alt="main_image" class="w-100">
                    </div>
                    <div class=" custom-file ">
                        <input type="file"
                               class="custom-file-input"
                               id="customFileLangHTML"
                               name="main_image">
                        <label class="custom-file-label " for="customFileLangHTML" data-browse="Обрати файл">Обрати
                            main_image</label>
                        @error('main_image')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class=" form-group col-lg-5 mb-2">
                    <div class="w-25">
                        <img src="{{ asset('storage/'. $post->preview_image) }}" alt="preview_image" class="w-100">
                    </div>
                    <div class=" custom-file   ">
                        <input type="file"
                               class="custom-file-input"
                               id="customFileLangHTML"
                               name="preview_image">
                        <label class="custom-file-label " for="customFileLangHTML" data-browse="Обрати файл">Обрати
                            preview_image </label>
                        @error('preview_image')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group col-lg-3">
                        <div class="col-xs-offset-2 col-xs-8">
                            <button type="submit" class="btn btn-secondary">Обновить</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection



