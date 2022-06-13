<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\Prizes;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PrizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prizes = Prizes::all();
        return view('Frontend.contest', compact('prizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'prize_code' => 'required|min:3',
            'ticket_amount' => 'required',
            'ticket_price' => 'required',
            'prize_date' => 'required',
            'description' => 'required',
            'details' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $data['active'] = true;
        $prize = Prizes::create($data);
        // if ($images = $request->file('images')) {
        //     foreach ($images as $key => $image) {
        //         $name = Str::uuid() . $image->getClientOriginalName();
        //         Storage::put("public/prize_images/$name", $image->getContent());
        //         $media = Media::create([
        //             'path' => "prize_images/$name",
        //             'prize_id' => $prize->id,
        //             'priority' => $key
        //         ]);
        //     }
        // }
        $name = $request->file('images')->getClientOriginalName();
        $path = $request->file('images')->storeAs('public/prize_images', $name);
        $media = Media::create([
            'path' => "prize_images/$name",
            'prize_id' => $prize->id
        ]);
        $media->save();

        $prize->name = $data['name'];
        $prize->prize_code = $data['prize_code'];
        $prize->ticket_amount = $data['ticket_amount'];
        $prize->ticket_price = $data['ticket_price'];
        $prize->prize_date = $data['prize_date'];
        $prize->description = $data['description'];
        $prize->details = $data['details'];
        $prize->category_id = $data['category_id'];
        $prize->save();


        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Prize Created'
        ]);
        return Redirect::route('dashboard.prizes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'prize_code' => 'required',
            'ticket_amount' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        Prizes::create($request->all());
        return redirect()->route('contests')->with('success', 'Prize created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function show(Prizes $prizes)
    {
        $prizes = Prizes::all();
        $categories = Category::all();
        // dd($prizes);
        // dd($categories);
        return view('Frontend.contest', compact('prizes', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = $request->input();
        $validator = Validator::make($data, [
            'name' => 'required|min:3',
            'prize_code' => 'required|min:5',
            'ticket_amount' => 'required',
            'ticket_price' => 'required',
            'prize_date' => 'required',
            'description' => 'required',
            'details' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $data['active'] = true;
        $prize = Prizes::find($id);

        $name = $request->file('images')->getClientOriginalName();
        $path = $request->file('images')->storeAs('public/prize_images', $name);
        $deleteOldImg = Media::where('prize_id', $prize->id)->first();
        $deleteOldImg->delete();
        $media = Media::create([
            'path' => "prize_images/$name",
            'prize_id' => $prize->id
        ]);
        $media->save();

        $prize->name = $data['name'];
        $prize->prize_code = $data['prize_code'];
        $prize->ticket_amount = $data['ticket_amount'];
        $prize->ticket_price = $data['ticket_price'];
        $prize->prize_date = $data['prize_date'];
        $prize->description = $data['description'];
        $prize->details = $data['details'];
        $prize->category_id = $data['category_id'];
        $prize->save();


        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Prize Updated'
        ]);
        return Redirect::route('dashboard.prizes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prizes $prizes)
    {
        //
    }

    public function singlePrize($prize_code)
    {
        $prize = Prizes::where('prize_code', $prize_code)->first();
        $tickets = Tickets::where('prize_id', $prize->id)->get();

        // dd($tickets);
        return view('Frontend.singleContest')->with(compact('prize', 'tickets'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prizes  $prizes
     * @return \Illuminate\Http\Response
     */
    public function SortBy($sort)
    {
        if ($sort == 'lowest-first') {
            $prizes = Prizes::orderBy('ticket_price', 'asc')->get();
            $sort = "Lowest first";
        } elseif ($sort == 'highest-first') {
            $prizes = Prizes::orderBy('ticket_price', 'desc')->get();
            $sort = "Highest first";
        } else {
            $prizes = Prizes::all();
        };
        return view('Frontend.contest', compact('sort', 'prizes'));
    }
    public function destroy($id)
    {
        $prize = Prizes::find($id);

        $prize->delete();

        return redirect()->route('dashboard.prizes')->with('success', 'Prize deleted');
    }
}