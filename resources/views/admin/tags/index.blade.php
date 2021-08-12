@extends('admin.layouts.app')
@section('title', 'Теги')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Теги</li>
@endsection
@section('mainContent')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-light" href="{{route('admin.tags.create')}}">
                Добавить новий тег
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
                        <th>Slug</th>
                        <th>Создан</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>##</th>
                        <th>Названия</th>
                        <th>Slug</th>
                        <th>Создан</th>
                        <th>Действие</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->title }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td>{{ $tag->created_at }}</td>
                            <td>

                                <a href="{{ route('admin.tags.show', $tag) }}" title="show detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('admin.tags.edit', $tag) }}" title="Edit tag">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                                   data-attr="{{ route ('admin.tags.modal.ajax.delete', $tag->id) }}"
                                   data-id="{{$tag->id}}"
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
                    <h4 class="justify-content-center">Удаление данных тега</h4>
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

