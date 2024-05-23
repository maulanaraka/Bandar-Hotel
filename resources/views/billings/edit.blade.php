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

        form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        form input[type="number"],
        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <h1>Edit Billing</h1>
        <form method="POST" action="/billings/{{ $billing->BillID }}">
            @csrf
            @method('PUT')
            <label for="ReservationID">Reservation ID:</label>
            <input type="number" id="ReservationID" name="ReservationID" value="{{ $billing->ReservationID }}">
            <label for="TotalAmount">Total Amount:</label>
            <input type="number" id="TotalAmount" name="TotalAmount" step="0.01" value="{{ $billing->TotalAmount }}">
            <label for="PaymentStatus">Payment Status:</label>
            <input type="text" id="PaymentStatus" name="PaymentStatus" value="{{ $billing->PaymentStatus }}">
            <label for="CreditCardNumber">Credit Card Number:</label>
            <input type="number" id="CreditCardNumber" name="CreditCardNumber" value="{{ $billing->CreditCardNumber }}">
            <button type="submit">Update</button>
        </form>
    </div>
@endsection
