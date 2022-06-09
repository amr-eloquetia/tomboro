@extends('dashboard.layouts.master')

@section('title', 'Generate Tickets')

@section('content')
<div class="account-form-area">
    <div class="account-form-wrapper">
        <form method="POST" action="{{ route('post.generateTickets')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Ticket Price</label>
                <input type="text" name="price" id="price" placeholder="Ticket Price">
            </div>
            <div class="form-group">
                <label>Avalibility</label>
                <input type="text" name="availability" id="availability" placeholder="0 or 1">
            </div>
            <div class="form-group">
                <label>Prize ID</label>
                <input type="text" name="prize_id" id="prize_id" placeholder="Prize Id">
            </div>
            <div class="form-group">
                <label>Number of Tickets</label>
                <input type="text" name="howmanyTickets" id="howmanyTickets" placeholder="Number of Tickets">
            </div>
            <div class="form-group text-center mt-5">
                <button type="submit" class="cmn-btn">Generate</button>
            </div>
        </form>
    </div>
</div>
@endsection
