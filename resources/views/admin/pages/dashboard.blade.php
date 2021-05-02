@extends('admin.layouts.app')
@section('mainContent')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <img src="{{ asset('img/educoin2.jpg') }}" style="margin: 0; height: 98vh; width: 100%;">
        </div>
    </main>
    @include('admin.includes.footer')
</div>
@endsection
@section('title', 'Админ-панель')
