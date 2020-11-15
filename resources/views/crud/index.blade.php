@extends('layouts.CRUD')
@section('title', '主頁')
@section('content')
<a class="btn btn-primary" href="{{ route('crud.create') }}">發文</a>
<br><br>
{{-- <table class="table table-hover">
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
</table> --}}
@foreach ($posts as $post)
<div class="card" style="margin-bottom:20px">
    <div class="card-body" onclick="window.location='{{route('crud.show',$post->id)}}'">
        <h4 class="card-title">{{$post->title}}</h4>
        <p class="card-text">{{$post->content}}</p>
    </div>
</div>
@endforeach
{{-- {{!! $posts->links() !!}} --}}
@endsection