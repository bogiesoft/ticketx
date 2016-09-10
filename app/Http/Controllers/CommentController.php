<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {
        $this->validate($request, [
                'comment'   => 'required',
            ]);

        $comment = Comment::create([
                    'ticket_id' => $request->input('ticket_id'),
                    'user_id'   => Auth::user()->id,
                    'comment'   => $request->input('comment'),
                ]);

        if ($comment->ticket->user->id !== Auth::user()->id) {
            $mailer->sendTicketComments($comment->ticket->user, Auth::user(), $comment->ticket, $comment);
        }

        return redirect()->back()->with('success', 'Your comment has be submitted.');
    }
}
