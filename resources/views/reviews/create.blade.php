@extends('layouts.app')

@section('content')
    <h1>Create a Review</h1>
    <form method="POST" action="{{ route('reviews.store') }}">
        @csrf
        <label for="ReservationID">Reservation ID:</label>
        <input type="number" id="ReservationID" name="ReservationID" required>

        <label for="Rating">Rating:</label>
        <input type="number" id="Rating" name="Rating" required>

        <label for="Comment">Comment:</label>
        <textarea id="Comment" name="Comment" required></textarea>

        <label for="InputDate">Input Date:</label>
        <input type="date" id="InputDate" name="InputDate" required>

        <label for="TravelType">Travel Type:</label>
        <input type="text" id="TravelType" name="TravelType" required>

        <button type="submit">Submit</button>
    </form>
@endsection