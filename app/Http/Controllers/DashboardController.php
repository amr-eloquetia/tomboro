<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prizes;
use App\Models\Tickets;
use App\Models\User;
use App\Models\Winners;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['role:admin']);
    // }
    public function index()
    {
        return view('dashboard.index');
    }
    public function users()
    {
        $users = User::all();
        return view('dashboard.users')->with(compact('users'));
    }
    public function prizes()
    {
        $tickets = Tickets::all();
        $prizes = Prizes::all();
        return view('dashboard.prizes')->with(compact('prizes', 'tickets'));
    }
    public function edituser($id)
    {
        $user = User::find($id);
        return view('dashboard.editUser')->with(compact('user'));
    }
    public function editPrize($id)
    {
        $prize = Prizes::find($id);
        return view('dashboard.editPrize')->with(compact('prize'));
    }
    public function categories()
    {
        $categories = Category::all();
        return view('dashboard.categories')->with(compact('categories'));
    }
    public function categoriesEdit($id)
    {
        $category = Category::find($id);
        return view('dashboard.categoriesEdit')->with(compact('category'));
    }
    public function createPrize()
    {
        return view('dashboard.prizeCreate');
    }
    public function tickets()
    {
        $tickets = Tickets::paginate(12);;
        return view('dashboard.tickets')->with(compact('tickets'));
    }
    public function generateTickets()
    {
        return view('dashboard.ticketsGenerate');
    }
    public function winners()
    {
        $winners = Winners::all();
        $tickets = Tickets::all();
        $users = User::all();
        return view('dashboard.winners')->with(compact('winners','tickets','users'));
    }
    public function createWinner()
    {
        return view('dashboard.createWinner');
    }
}
