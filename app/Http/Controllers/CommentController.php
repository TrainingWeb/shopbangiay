<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {
        $comment = New Comment;
        $product = Product::find($request->id);
        $comment->id_product = $request->id;
        $comment->id_user = Auth::user()->id;
        $comment->content = $request->content;

        $comment->save();
        return redirect("/products/$product->productslug.html")->with('thongbao','You are just posted a comment');
    }

    public function getIndex()
    {
        $comments = Comment::get();
        return view('/contentadmin.comments.index',compact('comments'));
    }

    public function deleteComment($id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return redirect('/listcomments')->with('thongbao', 'Just deleted'. $comments->id);
    }

    public function deletecommentcustomer($productslug, $id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return redirect("/products/$productslug.html")->with('thongbao', 'Just deleted your comment');
    }
}
