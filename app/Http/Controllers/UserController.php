<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $data = $request->input();
        $validator = Validator::make($data, [
            'username' => 'required|min:3',
            'firstname' => 'required|min:5',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'required' | 'string' | 'min:3' | 'confirmed',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'message' => 'Check the errors below',
                'status' => 'error'
            ]);
            dd($validator->errors());
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }
        if ($avatar = $request->file('avatar')) {

            $name = Str::uuid() . $avatar->getClientOriginalName();
            Storage::put("public/user_avatars/$name", $avatar->getContent());
            $user->avatar = $name;
            $user->save();
        }

        $user->username = $data['username'];
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->save();

        if ($request->has('password')) {
            $user->password = Hash::make($data['password']);
        }

        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Profile updated'
        ]);
        return Redirect::back();
    }
    public function edit(Request $request, $id)
    {

        $user = User::find($id);
        $data = $request->input();
        $validator = Validator::make($data, [
            'username' => 'required|min:3',
            'firstname' => 'required|min:3',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'message' => 'Check the errors below',
                'status' => 'error'
            ]);
            dd($validator->errors());
            return Redirect::back()->withInput()->exceptInput('password')->withErrors($validator->errors());
        }


        if ($avatar = $request->file('avatar')) {

            $name = Str::uuid() . $avatar->getClientOriginalName();
            Storage::put("public/user_avatars/$name", $avatar->getContent());
            $user->avatar = $name;
            $user->save();
        }

        $user->username = $data['username'];
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->save();

        if ($request->has('password')) {
            $user->password = Hash::make($data['password']);
        }

        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Profile updated'
        ]);
        // $users = User::all();
        return Redirect::back();
    }
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('dashboard.users')->with('success', 'user deleted');
    }
}
