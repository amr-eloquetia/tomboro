@extends('dashboard.layouts.master')

@section('title', 'Create Prize')

@section('content')
<div class="account-form-area">
    {{-- <h3 class="title">Edit "{{ $prize->name }}"</h3> --}}
    <div class="account-form-wrapper">
        <form method="POST" action="{{ route('prize.create.post')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Media</label>
                <div class="avatar-edit">
                    <input type='file' name='images' id="imageUpload" />
                    <label for="imageUpload"></label>
                </div>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="prize name">
            </div>
            <div class="form-group">
                <label>Prize Code</label>
                <input type="text" name="prize_code" id="prize_code" placeholder="prize code">
            </div>
            <div class="form-group">
                <label>Ticket Amount</label>
                <input type="text" name="ticket_amount" id="ticket_amount" placeholder="ticket amount">
            </div>
            <div class="form-group">
                <label>Ticket Price</label>
                <input type="text" name="ticket_price" id="ticket_price" placeholder="ticket price">
            </div>
            <div class="form-group">
                <label>Prize Date</label>
                <input type="date" name="prize_date" id="prize_date" placeholder="prize date">
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
                <label>Category</label>
                <input type="text" name="category_id" id="category_id"
                    placeholder="cars 1, bikes 2, phones 3, watches 4 , laptops 5, money 6">
            </div>
            <div class="form-group text-center mt-5">
                <button type="submit" class="cmn-btn">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
