@extends('dashboard.layouts.master')

@section('title', 'Users')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">avatar</th>

            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td scope="row">{{ $user->id }}</td>
            <td scope="row">
                <div style="max-height: 50px">
                    <figure style="max-height: 50px">
                        <img style="max-height: 50px; object-fit: cover;"
                            src="{{ URL::asset('storage/user_avatars/' .$user->avatar) }}" alt="" class="img-fluid">
                    </figure>
                </div>
            </td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>

            <td>
                <div style="display: flex;">

                    <a class="mr-2" style="color:white" href="{{ route('edit.user', $user->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a>

                    <form method="POST" action="{{ route('delete.user', $user->id) }}">
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
@endsection
<style>
    tr {
        display: flex;
        flex-direction: row;
        justify-content: start;
        align-items: center;
    }

    th:first-child {
        width: 4%;
    }

    td:first-child {
        width: 4%;

    }

    td,
    th {
        width: 12%;
    }
</style>
