@extends('layouts.app')

@section('content')
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

        .btn {
            padding: 10px 20px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            margin: 5px;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
            color: #333;
        }

        .table td {
            background-color: #fff;
            color: #555;
        }

        .table td form {
            display: inline-block;
            margin: 0;
        }

        .table td form button {
            margin-left: 5px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            .table th, .table td {
                padding: 8px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>

    <div class="container">
        <h1>Reservations</h1>
        <a href="{{ route('reservations.create') }}" class="btn btn-primary">Create Reservation</a>
        <br>
        <br>
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
                            <br>
                            <br>
                            <br>
                            <a href="{{ route('reservations.edit', $reservation->ReservationID) }}" class="btn btn-warning">Edit</a>
                            <br>
                            <br>
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
    </div>
@endsection
