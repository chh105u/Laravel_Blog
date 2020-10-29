@extends('layouts.CRUD')
@section('title', '編輯')
@section('content')
<form action="{{ route('crud.update',$post->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">標題</label>
        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="content">內容</label>    
        <textarea class="form-control" name="content" cols="30" rows="10">{{ $post->content }}</textarea>
    </div>
    <a class="btn btn-default" href="{{ route('crud.show', $post->id) }}">返回</a>
    <button type="submit" class="btn btn-primary">送出</button>
</form>
@endsection