<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function insert(Request $request){
        $user_id = $request->user;
        $product_id = $request->product;
        $content = $request->content;
        $comment = new Comment;
        $comment->user_id = $user_id;
        $comment->product_id = $product_id;
        $comment->content = $content;
        $comment->save();
        return redirect()->route('home.detail',['id'=>$product_id]);
        // return 1;
    }
}
