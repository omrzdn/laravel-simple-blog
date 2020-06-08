@extends('layouts.app');
@section('content')
<form method="post" action="{{route('posts.store')}}">
  @csrf
  <div class="form-group mt-5">
    <label>title</label>
    <input name="title" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label>description</label>
    <textarea name="desc" class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Create post</button>
</form>
@endsection
