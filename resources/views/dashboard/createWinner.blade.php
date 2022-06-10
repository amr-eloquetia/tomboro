@extends('dashboard.layouts.master')

@section('title', 'Create Winner')

@section('content')
<div class="account-form-area">
    <div class="account-form-wrapper">
        <form method="POST" action="{{ route('post.createWinner') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="prize name">
            </div>
            <div class="form-group">
                <label>Prize Code</label>
                <input type="text" name="prize_code" id="prize_code" placeholder="prize code">
            </div>
            <div class="form-group">
                <label>Ticket Number</label>
                <input type="text" name="ticket_number" id="ticket_number" placeholder="ticket number">
            </div>
            <div class="form-group">
                <label>Winner ID</label>
                <input type="text" name="winner_id" id="winner_id" placeholder="winner ID">
            </div>
            <div class="form-group">
                <label>Winner Name</label>
                <input type="text" name="winner_name" id="winner_name" placeholder="Winner Name">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" id="description" placeholder="description">
            </div>
            <div class="form-group">
                <label>Details</label>
                <input type="text" name="details" id="details" placeholder="details">
            </div>
            <div class="form-group">
                <label>Category ID</label>
                <input type="text" name="category_id" id="category_id" placeholder="category id">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" id="date" placeholder="prize date">
            </div>
            <div class="form-group text-center mt-5">
                <button type="submit" class="cmn-btn">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
