@extends('layouts.app')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: red;
            margin-bottom: 30px;
        }

        p {
            margin: 5px 0;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
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