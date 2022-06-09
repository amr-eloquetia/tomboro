@extends('dashboard.layouts.master')

@section('title', 'Tickets')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<a href="{{ route('get.generateTickets') }}">
    <button type="submit" class="btn btn-primary float-right mr-5">
        Generate Tickets
    </button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ticket Number</th>
            <th scope="col">Price</th>
            <th scope="col">Availability</th>
            <th scope="col">Prize ID</th>
            <th scope="col">Owner ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)
        <tr>
            <td scope="row">{{ $ticket->id }}</td>
            <td>{{ $ticket->ticket_number }}</td>
            <td>{{ $ticket->price }}</td>
            <td>{{ $ticket->availability }}</td>
            <td>{{ $ticket->prize_id }}</td>
            <td>{{ $ticket->owner_id }}</td>
            <td>
                {{-- <div style="display: flex;">

                    <a class="mr-2" style="color:white" href="{{ route('edit.user', $user->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a>

                    <form method="POST" action="{{ route('delete.user', $user->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="delete">Delete</i>
                        </button>

                    </form>
                </div> --}}
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
