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
            <th>User Email </th>
            <th>User Role</th>
            <th>Date Created</th>
            <th>Blocked</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                @if($user->role_id == null)
                <td>No Group</td>
                @else
                <td>{{ $user->role->title }}</td>
                @endif
                <td>{{ $user->created_at }}</td>
                <td>
                    @if($user->is_blocked == 0)
                        <p>NO</p>
                    @else
                        <p>YS</p>
                    @endif
                </td>
                <td>
{{--                    <form action="{{ route('users.destroy', $user) }}" method="POST">--}}
{{--                        @csrf--}}
                        <a href="{{ route('users.show', $user) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg ml-2"></i>
                        </a>

                        <a href="{{ route('users.edit', $user) }}">
                            <i class="fas fa-edit  fa-lg ml-2"></i>
                        </a>
{{--                    </form>--}}

                        <button type="button" style="border: none; background-color:transparent;" data-userid="{{ $user->id }}" data-toggle="modal" data-target="#delete" id="deleteModal" onclick="handleDelete({{ $user->id }})">
                            <i class="fas fa-trash fa-lg ml-1 text-danger"></i>
                        </button>



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
<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST" id="deleteUserForm">
            {{ method_field('DELETE') }}
            {{ csrf_field()}}
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="deleteModalLabel" style="color:black">Delete user</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body" style="color:black">
                   <p class="text-center">Are you sure you want to delete this user?</p>

               </div>

               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                   <button type="submit" class="btn btn-danger">Delete</button>
               </div>
           </div>
       </form>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        function handleDelete(id) {

            var form = document.getElementById('deleteUserForm');
            form.action='users/' + id;

            console.log('deleting.', form);
            $('#deleteModal').modal('show')
        }

    </script>
@endsection
