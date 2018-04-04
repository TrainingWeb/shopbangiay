<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function getIndex()
    {
        $feedbacks = Feedback::get();
        return view('/contentadmin.feedbacks.index', compact('feedbacks'));
    }

    public function add(Request $Request)
    {
        $feedbacks = New Feedback;
        $feedbacks->name = $Request->input('name');
        $feedbacks->company = $Request->input('company');
        $feedbacks->phone = $Request->input('phone');
        $feedbacks->email = $Request->input('email');
        $feedbacks->option = $Request->input('option');
        $feedbacks->content = $Request->input('content');

        $feedbacks->save();

        return redirect('/contact')->with('thongbao', 'Thanks you for the contact !');
    }
}
