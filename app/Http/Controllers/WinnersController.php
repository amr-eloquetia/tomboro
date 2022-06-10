<?php

namespace App\Http\Controllers;

use App\Models\Winners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class WinnersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();
        // dd($data);
        $validator = Validator::make($data, [
            'name' => 'required',
            'prize_code' => 'required',
            'ticket_number' => 'required',
            'winner_id' => 'required',
            'winner_name' => 'required',
            'description' => 'required',
            'details' => 'required',
            'category_id' => 'required',
            'date' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        };

        $data['active'] = true;
        $winner = Winners::create($data);

        $winner->name = $data['name'];
        $winner->prize_code = $data['prize_code'];
        $winner->ticket_number = $data['ticket_number'];
        $winner->winner_id = $data['winner_id'];
        $winner->winner_name = $data['winner_name'];
        $winner->description = $data['description'];
        $winner->details = $data['details'];
        $winner->category_id = $data['category_id'];
        $winner->date = $data['date'];
        $winner->save();

        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Winner Created'
        ]);
        return Redirect::route('dashboard.winners');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $winner = Winners::find($id);

        $winner->delete();

        return redirect()->route('dashboard.winners')->with('success', 'Winner deleted');
    }
}