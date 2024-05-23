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

    <div class="container">
        <h1>Guest Details</h1>
        <p>NIKID: {{ $guest->NIKID }}</p>
        <p>Name: {{ $guest->Name }}</p>
        <p>Email: {{ $guest->Email }}</p>
        <p>Phone: {{ $guest->Phone }}</p>
        <p>Address: {{ $guest->Address }}</p>
        <p>Credit Card Number: {{ $guest->CreditCardNumber }}</p>
    </div>
@endsection
