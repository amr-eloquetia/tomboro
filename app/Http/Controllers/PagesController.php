<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use App\Models\Tickets;
use App\Models\Winners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function contests()
    {
        return view('Frontend.contest');
    }
    public function singleContest()
    {
        return view('Frontend.singleContest');
    }
    public function lotteryDetails($id)
    {
        $tickets = Tickets::where($id = 'prize_id');
        return view('Frontend.lotteryDetails', compact('tickets'));
    }
    public function winners()
    {
        return view('Frontend.winners');
    }
    public function aboutUs()
    {
        $winners = Winners::all();
        $tickets = Tickets::all();
        $prizes = Prizes::all();
        return view('Frontend.aboutUs', compact('winners','tickets','prizes'));
    }
    public function userPanel()
    {
        $prizes = Prizes::all();
        $my_tickets = Tickets::where('owner_id', Auth::user()->id)->get();
        return view('Frontend.customer.userPanel',compact('my_tickets','prizes'));
    }
    public function userInfo()
    {
        return view('Frontend.customer.personalInfo');
    }
    public function userTransactions()
    {
        return view('Frontend.customer.transactions');
    }
    public function howItWorks()
    {
        return view('Frontend.howItWorks');
    }
    public function cart()
    {
        return view('Frontend.cart');
    }
    public function checkout()
    {
        return view('Frontend.checkout');
    }
    public function faq()
    {
        return view('Frontend.faq');
    }
    public function error404()
    {
        return view('Frontend.error404');
    }
    public function contact()
    {
        return view('Frontend.contact');
    }
    public function terms()
    {
        return view('Frontend.termsAndConditions');
    }
    public function privacy()
    {
        return view('Frontend.privacyPolicy');
    }
    public function safePlay()
    {
        return view('Frontend.safePlay');
    }
    public function fairGambling()
    {
        return view('Frontend.fairGambling');
    }
    public function liveStream()
    {
        $prize = Prizes::orderBy('prize_date')->first();
        return view('Frontend.liveStream', compact('prize'));
    }
}
