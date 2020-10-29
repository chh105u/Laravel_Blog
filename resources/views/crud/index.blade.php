@extends('layouts.CRUD')
@section('title', '主頁')
@section('content')
<table class="table table-hover">
    <thead>
        <th>標題</th>
        <th>內容</th>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr onclick="window.location = '{{ route('crud.show', $post->id) }}'">
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
        @endforeach
    </tbody>
    <a class="btn btn-primary" href="{{ route('crud.create') }}">新增</a>
</table>
@endsection