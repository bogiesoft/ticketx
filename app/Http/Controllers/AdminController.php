<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\Ticket;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $count_users = User::all()->count();
        $count_roles = Role::all()->count();
        $count_permissions = Permission::all()->count();
        $count_open_ticket = Ticket::where('status_id', 1)->count();
        $count_inprogress_ticket = Ticket::where('status_id', 2)->count();
        $count_closed_ticket = Ticket::where('status_id', 3)->count();
        $count_reopened_ticket = Ticket::where('status_id', 4)->count();

        return view('admin.dashboard',
        compact('count_reopened_ticket',
                'count_closed_ticket',
                'count_inprogress_ticket',
                'count_users', 'count_roles',
                'count_permissions',
                'count_open_ticket')
            );
    }
}
