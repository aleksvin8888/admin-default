@extends('admin.layouts.app')
@section('title', 'Roles')

@section('mainContent')
    <div class="container col-lg-10 mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Roles</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('roles.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-dark table-borderless">
            <tr>
                <th>Id</th>
                <th>Role Title</th>
                <th>Role Description</th>
                <th>Actions</th>
            </tr>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->title }}</td>
                    <td>{{ $role->description }}</td>
                    <td>
                        <form action="{{ route('roles.destroy', $role) }}" method="POST">

                            <a href="{{ route('roles.show', $role) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg ml-2"></i>
                            </a>

                            <a href="{{ route('roles.edit', $role) }}">
                                <i class="fas fa-edit  fa-lg ml-2"></i>
                            </a>

                            @csrf
                            @method('DELETE')

                            <button type="button" style="border: none; background-color:transparent;" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-trash fa-lg ml-1 text-danger"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="color:black">Delete confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="color:black">
                                            Удаляем?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
    </div>
@endsection
