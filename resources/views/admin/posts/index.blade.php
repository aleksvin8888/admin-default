@extends('admin.layouts.app')
@section('title', 'Посты')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Посты</li>
@endsection
@section('mainContent')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-light" href="{{route('admin.posts.create')}}">
                Добавить новий пост
                <i class="fas fa-plus mr-1"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>##</th>
                        <th>Названия</th>
                        <th>Категория</th>
                        <th>Лайки</th>
                        <th>Контент</th>
                        <th>Создан</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>##</th>
                        <th>Названия</th>
                        <th>Категория</th>
                        <th>Лайки</th>
                        <th>Контент</th>
                        <th>Создан</th>
                        <th>Действие</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->title }}</td>
                            <td>{{ $post->like }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>

                                <a href="{{ route('admin.posts.show', $post) }}" title="show detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('admin.posts.edit', $post) }}" title="Edit post">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                                   data-attr="{{ route ('admin.posts.modal.ajax.delete', $post->id) }}"
                                   data-id="{{$post->id}}"
                                   title="Delete tag">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="justify-content-center">Удаление данных поста</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- Полученый ответ Ajax -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

