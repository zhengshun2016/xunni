<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Requests\CommentRequest $request)
    {
      Comment::create(array_merge($request->all(),['user_id'=>\Auth::user()->id]));
      return redirect()->action('PostController@show',['id'=>$request->get('discussion_id')]);
    }
}
