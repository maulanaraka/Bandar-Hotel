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
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <h1>Review Details</h1>
        <p>Reservation ID: {{ $review->ReservationID }}</p>
        <p>Rating: {{ $review->Rating }}</p>
        <p>Comment: {{ $review->Comment }}</p>
        <p>Input Date: {{ $review->InputDate }}</p>
        <p>Travel Type: {{ $review->TravelType }}</p>
    </div>
@endsection
