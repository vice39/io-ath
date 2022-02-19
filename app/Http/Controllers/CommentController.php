<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, Meeting $meeting)
    {
        $request->validate([
            'content' => 'required',
        ]);

         $user = auth()->user();

        $comment = new Comment();
        $comment->content = $request->get('content');
        $comment->author()->associate($user);
        $comment->meeting()->associate($meeting);
        $comment->save();

        return redirect()->action(
            [MeetingController::class, 'show'],
            ['meeting' => $meeting]
        );
    }

}
