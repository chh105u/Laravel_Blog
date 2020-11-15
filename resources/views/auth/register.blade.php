@extends('layouts.CRUD')
@section('title', '註冊')
@section('content')
<form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Your name:</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection