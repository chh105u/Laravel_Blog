@extends('layouts.CRUD')
@section('title', '新增')
@section('content')
<form action="{{ route('crud.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">標題</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="content">內容</label>    
        <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
    </div>
    <a class="btn btn-default" href="{{ route('crud.index') }}">返回</a>
    <button type="submit" class="btn btn-primary">送出</button>
</form>
@endsection