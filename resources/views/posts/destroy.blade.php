@extends('layouts.app');
@section('content')
<form method="post" action="{{route('posts.destroy', ['post' => $post->id])}}">
  @csrf
  @method('DELETE')
  <div class="form-group mt-5">
    <label>title</label>
    <input name="title" type="text" class="form-control" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label>description</label>
    <textarea name="desc" class="form-control" rows="5">{{$post->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Delete post</button>
</form>
@endsection
