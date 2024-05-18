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

        a.create-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a.create-button:hover {
            background-color: #0056b3;
        }

        .billing-item {
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            transition: box-shadow 0.3s;
        }

        .billing-item:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .billing-item h2 {
            color: #555;
            margin-top: 0;
        }

        .billing-item p {
            color: #777;
            margin: 5px 0;
        }

        .billing-item a {
            display: inline-block;
            margin-right: 10px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .billing-item a:hover {
            color: #0056b3;
        }

        .billing-item form {
            display: inline;
        }

        .billing-item button {
            padding: 5px 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .billing-item button:hover {
            background-color: #c82333;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            .billing-item {
                padding: 15px;
            }

            .billing-item h2 {
                font-size: 18px;
            }

            .billing-item p {
                font-size: 14px;
            }

            .billing-item a,
            .billing-item button {
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <h1>All Billings</h1>
        <a href="/billings/create" class="create-button">Create New Billing</a>
        @if($billings->count() > 0)
            @foreach($billings as $billing)
                <div class="billing-item">
                    <h3>Billing ID: {{ $billing->BillID }}</h3>
                    <p>Reservation ID: {{ $billing->ReservationID }}</p>
                    <p>Total Amount: {{ $billing->TotalAmount }}</p>
                    <p>Payment Status: {{ $billing->PaymentStatus }}</p>
                    <p>Credit Card Number: {{ $billing->CreditCardNumber }}</p>
                    <a href="/billings/{{ $billing->BillID }}/edit">Edit</a>
                    <form method="POST" action="/billings/{{ $billing->BillID }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
        @else
            <p>No billings found.</p>
        @endif
    </div>
@endsection
