@extends('dashboard.layouts.master')

@section('title', 'Prizes')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<a href="{{ route('prize.create.get') }}">
    <button type="submit" class="btn btn-primary float-right mr-5">
        Create
    </button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Media</th>
            <th scope="col">Name</th>
            <th scope="col">Prize_code</th>
            <th scope="col">Ticket Amount</th>
            <th scope="col">Ticket Price</th>
            <th scope="col">Prize Date</th>
            <th scope="col">Description</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prizes as $prize)
        <tr>
            <td>{{ $prize->id }}</td>

            <td scope="row" style="display: flex">
                @foreach ($prize->medias as $media)
                <div style="max-height: 50px">
                    <figure style="max-height: 50px">
                        <img style="max-height: 50px; object-fit: cover;"
                            src="{{ URL::asset('storage/' .$media->path)}}" alt="" class="img-fluid">
                    </figure>
                </div>
                @endforeach
            </td>

            <td>{{ $prize->name }}</td>
            <td>
                {{ $prize->prize_code }}
            </td>
            <td>{{ $prize->ticket_amount }}</td>
            <td>{{ $prize->ticket_price }}</td>
            <td>{{ $prize->prize_date }}</td>
            <td style="max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{
                $prize->description }}</td>
            <td style="max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $prize->details
                }}</td>
            <td>
                <div style="display: flex;">

                    <a class="mr-2" style="color:white" href="{{ route('edit.prize', $prize->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a>

                    <form method="POST" action="{{ route('delete.prize', $prize->id) }}">
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
