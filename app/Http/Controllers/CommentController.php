<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {
        $this->validate($request, [
            'content' => 'required'
        ]);
        Comment::insert([
            'content' => $request->content,
            'product_id' => $request->product_id,
            'user_id' => $request->user()->id
        ]);
        return Redirect::back();
    }
}
