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
                                <i class="fas fa-eye text-success  fa-lg"></i>
                            </a>

                            <a href="{{ route('roles.edit', $role) }}">
                                <i class="fas fa-edit  fa-lg"></i>
                            </a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <br>
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        {{ $role->links() }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
