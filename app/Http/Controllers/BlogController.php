<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

      $allPosts = [[
              'ID'          => '1',
              'title'       => 'MVC Pattern',
              'posted_by'   => 'Omar',
              'created_at'  => '2020-5-24']];

      return view('blog', ['posts' => $allPosts]);
    }
}
