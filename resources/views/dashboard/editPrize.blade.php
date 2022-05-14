@extends('dashboard.layouts.master')

@section('title', 'Edit Prize')

@section('content')
<div class="account-form-area">
    <h3 class="title">Edit "{{ $prize->name }}"</h3>
    <div class="account-form-wrapper">
        <form method="POST" action="{{ route('editPrize.put', $prize->id) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="form-group">
                <label>Media</label>
                <div class="avatar-edit">
                    <input type='file' name='images' id="imageUpload" />
                    <label for="imageUpload"></label>
                </div>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="{{ $prize->name }}">
            </div>
            <div class="form-group">
                <label>Prize Code</label>
                <input type="text" name="prize_code" id="prize_code" placeholder="{{ $prize->prize_code }}">
            </div>
            <div class="form-group">
                <label>Ticket Amount</label>
                <input type="text" name="ticket_amount" id="ticket_amount" placeholder="{{ $prize->ticket_amount }}">
            </div>
            <div class="form-group">
                <label>Ticket Price</label>
                <input type="text" name="ticket_price" id="ticket_price" placeholder="{{ $prize->ticket_price }}">
            </div>
            <div class="form-group">
                <label>Prize Date</label>
                <input type="date" name="prize_date" id="prize_date" placeholder="{{ $prize->prize_date }}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" id="description" placeholder="{{ $prize->description }}">
            </div>
            <div class="form-group">
                <label>Details</label>
                <input type="text" name="details" id="details" placeholder="details">
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category_id" id="category_id" placeholder="{{ $prize->category_id }}">
            </div>
            <div class="form-group text-center mt-5">
                <button type="submit" class="cmn-btn">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
