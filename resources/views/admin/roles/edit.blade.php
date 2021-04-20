@extends('admin.layouts.app')
@section('title') Edit {{ $role->title }}
@endsection
@section('mainContent')
    <div class="container col-lg-10 mt-2">
        <div class="bg-info text-white" id="breadcrumb-user" style="height: 45px">
            <h2 class="ml-3">Edit Role</h2>
        </div>

    @include('admin.includes.messages')

    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ old('title', $role->title) }}" class="form-control" placeholder="Role's title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{ old('email', $role->description) }}" class="form-control" placeholder="Role's description">
                </div>
            </div>

            <div class="form-group col-lg-3">
                <div class="float-right">
                    <a class="btn btn-info" href="{{ route('roles.index', $role) }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </div>
                <div class="col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-info">Edit</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection

