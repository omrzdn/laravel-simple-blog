
@extends('layouts.app');
@section('content')
<h1 class="text-center mt-5">DashBoard</h1>
<a  href="{{route('posts.create')}}" class="btn btn-success mt-5">Create Post</a>
<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)

      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->user->name }}</td>
        <td>{{ $post->created_at->format('Y-M-d') }}</td>
        <td>
          <a href="{{Route('posts.show', ['post' =>$post->id])}}" class="btn btn-info">View</a>
          <a href="{{Route('posts.edit', ['post' =>$post->id])}}" class="btn btn-primary">Edit</a>
          <form style="display: inline;"  method="post" action="{{route('posts.destroy', ['post'=> $post->id])}}">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
