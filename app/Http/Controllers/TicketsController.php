<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Tickets::all();
        return view('Frontend.lotteryDetails', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show($prize_code)
    {
        // $prize = Prizes::find($id);
        $prize = Prizes::where('prize_code', $prize_code)->first();


        $tickets = Tickets::where('prize_id', $prize->id)->get();
        return view('Frontend.lotteryDetails', compact('prize', 'tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('Frontend.cart');
    }
    public function addToCart($id)
    {
        $ticket = Tickets::findOrFail($id);
        $ticket->availability = '0';
        $ticket->save();
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "ticket number" => $ticket->ticket_number,
                "quantity" => 1,
                "price" => $ticket->price,

            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function remove(Request $request)
    {
        $ticket = Tickets::findOrFail($request->id);
        $ticket->availability = '1';
        $ticket->save();
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->input();
        $user_id = Auth::user()->id;
        $ticket_numbers = $data['ticket_number'];
        foreach ($ticket_numbers as $key => $value) {
            $ticket = Tickets::where('ticket_number', $value)->first();
            $ticket->owner_id = $user_id;
            $ticket->save();
        }
        return view('Frontend.customer.userPanel')->with('success', 'Tickets bought successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
