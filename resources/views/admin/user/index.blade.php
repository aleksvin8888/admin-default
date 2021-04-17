@extends('admin.layouts.app')

@section('mainContent')
<div class="container mt-2">
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
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->created_at }}</td>
                <td>

                    <div class="row">
                        <a href="{{ route('users.show', $user) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg ml-2"></i>
                        </a>

                        <a href="{{ route('users.edit', $user) }}">
                            <i class="fas fa-edit  fa-lg ml-2"></i>
                        </a>

                        <form method="POST" action="{{route('users.destroy', $user->id )}}" >
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                            <button class="fas fa-trash fa-lg ml-2 text-danger"
                                    onclick="return confirm(' !!!! DENGER you delete User {{$user->name}}  !!!! ')" >

                            </button>
                        </form>
                    </div>

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


