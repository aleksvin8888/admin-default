@extends('admin.layouts.app')
@section('title', 'Users')

@section('mainContent')
<div class="container col-lg-10 mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
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
            <th>User Name</th>
            <th>User Role</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role->title }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user) }}" method="POST">

                        <a href="{{ route('users.show', $user) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('users.edit', $user) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                    <!-- Button trigger modal -->
{{--                        <button type="button" title="delete" style="border: none; background-color:transparent;" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                            <i class="fas fa-trash fa-lg text-danger"></i>--}}
{{--                        </button>--}}


                        <button type="button" class="btn btn-primary" style="border: none; background-color:transparent;" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
