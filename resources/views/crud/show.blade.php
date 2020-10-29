@extends('layouts.CRUD')
@section('title', '查看')
@section('content')
<h1>{{ $post->title }}</h1>
<div>{{ $post->content }}</div>
<a class="btn btn-default" href="{{ route('crud.index') }}">返回</a>
<a class="btn btn-primary" href="{{ route('crud.edit', $post->id) }}">編輯</a>
<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">刪除</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>是否刪除？</h4>
            </div>
            <div class="modal-footer">
                <form action="{{ route('crud.destroy', $post->id) }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submmit" class="btn btn-danger">刪除</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection