@extends('dashboard.layouts.master')

@section('title', 'Winners')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<div class="col-lg-12">
    {{-- search for winner --}}
    <div class="row">
        <div class="search my-3">
            <p class="text-center text-dark text-uppercase">Search for winner</p>
        </div>
        <div class="col-lg-12">
            <div class="row d-flex align-items-center justify-content-center">

                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ticket_number" id="ticket_number"
                            placeholder="Ticket Number">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="search" onclick="search()">Search</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="winner-name"></div>
<a href="{{ route('dashboard.createWinner') }}">
    <button type="submit" class="btn btn-primary float-right mr-5">
        Create a winner
    </button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Prize Code</th>
            <th scope="col">Ticket Number</th>
            <th scope="col">Winner ID</th>
            <th scope="col">Winner Name</th>
            <th scope="col">Description</th>
            <th scope="col">Details</th>
            <th scope="col">Category ID</th>
            <th scope="col">Date</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($winners as $winner)
        <tr>
            <td scope="row">{{ $winner->id }}</td>
            <td>{{ $winner->name }}</td>
            <td>{{ $winner->prize_code }}</td>
            <td>{{ $winner->ticket_number }}</td>
            <td>{{ $winner->winner_id }}</td>
            <td>{{ $winner->winner_name }}</td>
            <td>{{ $winner->description }}</td>
            <td>{{ $winner->details }}</td>
            <td>{{ $winner->category_id }}</td>
            <td>{{ $winner->date }}</td>
            <td>
                <div style="display: flex;">

                    {{-- <a class="mr-2" style="color:white" href="{{ route('edit.user', $user->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a> --}}

                    <form method="POST" action="{{ route('delete.winner', $winner->id) }}">
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
<script>
    function search(e) {
        var ticket_number = $('#ticket_number').val();
        var tickets = {!! $tickets !!};
        var users = {!! $users !!};

        var filteredTickets = tickets.filter(function (ticket) {
            return ticket.ticket_number == ticket_number;
        });

        var filteredUsers = users.filter(function (user) {
            return user.id == filteredTickets[0].owner_id;
        });
        var winnerDiv = document.getElementById('winner-name');
        var winner = document.createElement('div');
        winnerDiv.appendChild(winner);
        winner.appendChild(document.createTextNode("Username :" + filteredUsers[0].id));
        winner.appendChild(document.createElement('br'));
        winner.appendChild(document.createTextNode("Username :" + filteredUsers[0].username));
        winner.appendChild(document.createElement('br'));
        winner.appendChild(document.createTextNode("Email: " + filteredUsers[0].email));
        winner.appendChild(document.createElement('br'));
        winner.appendChild(document.createTextNode("Phone Number: " + filteredUsers[0].phone));

  console.log(filteredUsers);
}



</script>
