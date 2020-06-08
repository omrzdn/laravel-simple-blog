<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(){

      $postsFromDB = Post::all();

      return view('posts.blog', ['posts' => $postsFromDB]);
    }

    public function show($post){

      $singlePost = post::findorfail($post);
      return view('posts.show', ['post' => $singlePost]);
    }

    public function create(){
      return view('posts.create');
    }

    public function store()
    {
      $title = request()->title;
      $desc = request()->desc;

      $post = post::create([
        'title' => $title,
        'description' => $desc
      ]);

      return redirect(Route('posts.index'));
    }

    public function edit($post){

      $singlePost = post::findorfail($post);
      return view('posts.edit', ['post' => $singlePost]);
    }

    public function update($post, request $request)
    {
      $singlePost = post::findorfail($post);

      $singlePost->update([

          'title' => $request->title,
          'description' => $request->desc
      ]);

      return redirect(Route('posts.index'));
    }

    public function destroy ($post){

      $singlePost = post::findorfail($post);
      $singlePost->delete();

      return redirect(route('posts.index'));
    }


}
