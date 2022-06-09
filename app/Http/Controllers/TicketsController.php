<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Tickets::paginate(4);
        return view('Frontend.lotteryDetails', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();

        // $tickets = New Tickets();
        $validator = Validator::make($data, [
            'price' => 'required',
            'availability' => 'required',
            'prize_id' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('alert', [
                'status' => 'error',
                'message' => 'Check the errors below'
            ]);
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }
        $howManyTickets = $data['howmanyTickets'];
        for ($i = 0; $i < $howManyTickets; $i++) {
        $tickets = New Tickets();
        $tickets->price = $data['price'];
        $tickets->availability = $data['availability'];
        $tickets->prize_id = $data['prize_id'];
        $tickets->ticket_number = mt_rand(100000, 999999);
        $tickets->owner_id = 0;
        $tickets->save();
        }
        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Prize Created'
        ]);
        return Redirect::route('dashboard.tickets');
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


        $tickets = Tickets::where('prize_id', $prize->id)->where('availability', 1)->paginate(6);
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
                "owner_id" => $ticket->owner_id,

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
        $prizes = Prizes::all();
        $data = $request->input();
        $user_id = Auth::user()->id;
        $ticket_numbers = $data['ticket_number'];
        $cart = session()->get('cart', []);

        foreach ($ticket_numbers as $key => $value) {
            $ticket = Tickets::where('ticket_number', $value)->first();
            $ticket->owner_id = $user_id;
            $ticket->save();

            if ($ticket->id) {
                $cart = session()->get('cart');
                if (isset($cart[$ticket->id])) {
                    unset($cart[$ticket->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product removed successfully');
            }
        }
        $my_tickets = Tickets::where('owner_id', Auth::user()->id)->get();




        return view('Frontend.customer.userPanel', compact('my_tickets','prizes'))->with('success', 'Tickets bought successfully!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Tickets::find($id);

        $ticket->delete();

        return redirect()->route('dashboard.tickets')->with('success', 'Ticket deleted');
    }
}