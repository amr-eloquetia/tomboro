@extends('dashboard.layouts.master')

@section('title', 'Edit Category')

@section('content')
<div class="account-form-area">
    <h3 class="title">Edit "{{ $category->name }}"</h3>
    <div class="account-form-wrapper">
        <form method="POST" action="{{ route('categories.edit.post', $category->id) }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label>Parent Id</label>
                <input type="text" name="parent_id" id="parent_id" placeholder="{{ $category->parent_id }}">
            </div>

            <div class="form-group text-center mt-5">
                <button type="submit" class="cmn-btn">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
