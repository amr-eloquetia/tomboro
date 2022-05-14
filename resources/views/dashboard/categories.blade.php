@extends('dashboard.layouts.master')

@section('title', 'Categories')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<button type="submit" class="btn btn-primary float-right mr-5" data-toggle="modal" data-target="#createCategory"
    data-dismiss="modal" aria-label="Close">
    Create
</button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Parent_id</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>

            <td>{{ $category->name }}</td>
            <td>
                {{ $category->parent_id }}
            </td>
            <td>
                <div style="display: flex;">

                    <a class="mr-2" style="color:white" href="{{ route('categories.edit', $category->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a>

                    <form method="POST" action="{{ route('categories.delete', $category->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="delete">Delete</i>
                        </button>

                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<div class="modal fade" id="createCategory" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                    <h3 class="title">Create Category</h3>
                    <div class="account-form-wrapper">
                        <form method="POST" action="{{ URL::route('categories.create.post') }}">
                            @csrf
                            <div class="form-group">
                                <label>Name <sup>*</sup></label>
                                <input type="text" name="name" id="name" placeholder="Enter category name">
                            </div>
                            <div class="form-group">
                                <label>Parent Id <sup>*</sup></label>
                                <input type="text" name="parent_id" id="parent_id" placeholder="Enter parent id">
                            </div>
                            <div class="form-group text-center mt-5">
                                <button type="submit" class="cmn-btn">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
