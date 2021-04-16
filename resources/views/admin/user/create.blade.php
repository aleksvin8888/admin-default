@extends('admin.layouts.app')
@section('mainContent')

<div class="col-md-9">
    <div class="row bg-info ">
        <h2>New User</h2>
    </div>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label for="inputEmail" class="col-xs-2 control-label">name:</label>
            <div class="col-xs-8">
                <input type="text" name="name" class="form-control" id="inputEmail" placeholder="Enter name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-xs-2 control-label">email:</label>
            <div class="col-xs-8">
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-xs-2 control-label">Пароль:</label>
            <div class="col-xs-8">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-8">
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </div>
    </form>
</div>

@endsection
@section('title', 'Add New User')
