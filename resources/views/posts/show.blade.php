@extends('layouts.app');
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Post ID : {{$post->id}}
  </div>
  <div class="card-body">
    <h5 class="card-title">Title:- {{$post->title}} </h5>
    <p class="card-text">
      Subject: <br /> {{$post->description}}
    </p>
  </div>
</div>
@endsection
