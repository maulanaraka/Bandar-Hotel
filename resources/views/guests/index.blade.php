@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Guests</h1>
    <a href="{{ route('guests.create') }}" class="btn btn-primary">Add New Guest</a>
    <table class="table">
        <thead>
            <tr>
                <th>NIKID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Credit Card Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guests as $guest)
            <tr>
                <td>{{ $guest->NIKID }}</td>
                <td>{{ $guest->Name }}</td>
                <td>{{ $guest->Email }}</td>
                <td>{{ $guest->Phone }}</td>
                <td>{{ $guest->Address }}</td>
                <td>{{ $guest->CreditCardNumber }}</td>
                <td>
                    <a href="{{ route('guests.edit', $guest) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('guests.destroy', $guest) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection