@extends('admin.layouts.app')

@section('title', 'Add New User')

@section('mainContent')

<div class="container-fluid col-lg-10 mt-2">
    <div class="bg-info text-white" id="breadcrumb-user" style="height: 45px">
        <h2 class="ml-3">New User</h2>
    </div>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group col-lg-12 mb-2">
            <label for="inputEmail" class="col-xs-2 control-label">Name:</label>
            <div class="col-xs-8">
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter name"  value="{{old('name')}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group col-lg-12 mb-2">
            <label for="inputEmail" class="col-xs-2 control-label">Email:</label>
            <div class="col-xs-8">
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Enter email" value="{{old('email')}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group col-lg-12 mb-2">
            <label for="inputPassword" class="col-xs-2 control-label">Password:</label>
            <div class="col-xs-8">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group col-lg-3">
            <div class="float-right">
                <a class="btn btn-info" href="{{ route('users.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
            <div class="col-xs-offset-2 col-xs-8">
                <button type="submit" class="btn btn-info">Create</button>
            </div>
        </div>
    </form>
</div>

@endsection

