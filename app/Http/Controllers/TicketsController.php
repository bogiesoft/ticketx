<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\Mailers\AppMailer;
use App\Priority;
use App\Status;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $categories = Category::all();
        $prioritys = Priority::all();
        $statuses = Status::all();

        return view('tickets.create', compact('categories', 'statuses', 'prioritys'));
    }

    public function store(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
                    'title'     => 'required',
                    'category'  => 'required',
                    'priority'  => 'required',
                    'message'   => 'required',
                ]);

        $ticket = new Ticket([
                    'title'        => $request->input('title'),
                    'user_id'      => Auth::user()->id,
                    'ticket_id'    => strtoupper(str_random(10)),
                    'category_id'  => $request->input('category'),
                    'priority_id'  => $request->input('priority'),
                    'message'      => $request->input('message'),
                ]);

        $ticket->status_id = '1';

        $mailer->sendTicketInformation(Auth::user(), $ticket);

        $ticket->save();

        return redirect()->route('tickets.index')->with('success', "A ticket with ID: #$ticket->ticket_id has been opened.");
    }

    public function reopen($ticket_id, AppMailer $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status_id = '4';

        $ticket->save();

        $ticketOwner = $ticket->user;

        $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with('info', "Your ticket with ID: #$ticket->ticket_id has been reopened.");
    }

    public function userTickets()
    {
        $tickets = Ticket::orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->paginate(10);
        $categories = Category::all();
        $prioritys = Priority::all();
        $statuses = Status::all();

        return view('tickets.index', compact('tickets', 'categories', 'statuses', 'prioritys'));
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->where('user_id', Auth::user()->id)->firstOrFail();

        $category = $ticket->category;

        $comments = $ticket->comments;

        $status = $ticket->status;

        $priority = $ticket->priority;

        return view('tickets.show', compact('ticket', 'category', 'status', 'priority', 'comments'));
    }
}
