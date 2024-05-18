@extends('layouts.app')

@section('content')
    <h1>Review Details</h1>
    <p>Reservation ID: {{ $review->ReservationID }}</p>
    <p>Rating: {{ $review->Rating }}</p>
    <p>Comment: {{ $review->Comment }}</p>
    <p>Input Date: {{ $review->InputDate }}</p>
    <p>Travel Type: {{ $review->TravelType }}</p>
@endsection