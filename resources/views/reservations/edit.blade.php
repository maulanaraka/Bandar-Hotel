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
@section('content')
    <h1>Edit Reservation</h1>
    <form action="{{ route('reservations.update', $reservation->ReservationID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NIKID">NIK ID</label>
            <input type="number" class="form-control" id="NIKID" name="NIKID" value="{{ $reservation->NIKID }}" required>
        </div>
        <div class="form-group">
            <label for="RoomID">Room ID</label>
            <input type="number" class="form-control" id="RoomID" name="RoomID" value="{{ $reservation->RoomID }}" required>
        </div>
        <div class="form-group">
            <label for="CheckInDate">Check In Date</label>
            <input type="date" class="form-control" id="CheckInDate" name="CheckInDate" value="{{ $reservation->CheckInDate }}" required>
        </div>
        <div class="form-group">
            <label for="CheckOutDate">Check Out Date</label>
            <input type="date" class="form-control" id="CheckOutDate" name="CheckOutDate" value="{{ $reservation->CheckOutDate }}" required>
        </div>
        <div class="form-group">
            <label for="TotalAmount">Total Amount</label>
            <input type="number" step="0.01" class="form-control" id="TotalAmount" name="TotalAmount" value="{{ $reservation->TotalAmount }}" required>
        </div>
        <div class="form-group">
            <label for="idPenyewaanMobil">Car Rental ID</label>
            <input type="text" class="form-control" id="idPenyewaanMobil" name="idPenyewaanMobil" value="{{ $reservation->idPenyewaanMobil }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection