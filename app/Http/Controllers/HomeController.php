<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App;
use App\Models\Winners;

class HomeController extends Controller
{
    public function index()
    {
        $prizes = Prizes::all();
        $winners =Winners::all();
        // return (Auth::guest() ? redirect()->route('login') : redirect()->route('dashboard.index'));
        return view('welcome', compact('prizes','winners'));
    }
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return back();
    }
}