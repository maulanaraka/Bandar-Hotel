@extends('layouts.app')

@section('content')
    <h1>Reservations</h1>
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Create Reservation</a>
    <table class="table">
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>NIK ID</th>
                <th>Room ID</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Total Amount</th>
                <th>Car Rental ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->ReservationID }}</td>
                    <td>{{ $reservation->NIKID }}</td>
                    <td>{{ $reservation->RoomID }}</td>
                    <td>{{ $reservation->CheckInDate }}</td>
                    <td>{{ $reservation->CheckOutDate }}</td>
                    <td>{{ $reservation->TotalAmount }}</td>
                    <td>{{ $reservation->idPenyewaanMobil }}</td>
                    <td>
                        <a href="{{ route('reservations.show', $reservation->ReservationID) }}" class="btn btn-info">View</a>
                        <a href="{{ route('reservations.edit', $reservation->ReservationID) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('reservations.destroy', $reservation->ReservationID) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection