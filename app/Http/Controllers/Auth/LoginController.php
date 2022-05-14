<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Traits\HasRoles;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, HasRoles;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function authenticated(Request $request, $user)
    {
        $user->last_login = Carbon::now();
        $user->save();
    }

    public function logout()
    {

        Session::flush();
        Auth::logout();
        // Auth::guard('user')->logout();
        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Te-ai delogat cu succes!'
        ]);
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'type' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            Session::flash('alert', [
                'status' => 'success',
                'message' => 'You have logged in!'
            ]);
            if (Auth::user()->hasRole('admin'))
                return Redirect::route('dashboard.index');
            else
                return Redirect::route('userPanel');
        } else {
            Session::flash('alert', [
                'status' => 'danger',
                'message' => 'Bad credentials'
            ]);
            return Redirect::back()->withInput()->exceptInput('password');
        }
    }
}
