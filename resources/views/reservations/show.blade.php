@extends('layouts.app')

@section('content')
    <h1>Reservation Details</h1>
    <p>Reservation ID: {{ $reservation->ReservationID }}</p>
    <p>NIK ID: {{ $reservation->NIKID }}</p>
    <p>Room ID: {{ $reservation->RoomID }}</p>
    <p>Check In Date: {{ $reservation->CheckInDate }}</p>
    <p>Check Out Date: {{ $reservation->CheckOutDate }}</p>
    <p>Total Amount: {{ $reservation->TotalAmount }}</p>
    <p>Car Rental ID: {{ $reservation->idPenyewaanMobil }}</p>
    <a href="{{ route('reservations.edit', $reservation->ReservationID) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('reservations.destroy', $reservation->ReservationID) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection