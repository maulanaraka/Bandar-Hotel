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

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input, textarea, select {
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            align-self: center;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            label {
                font-size: 14px;
            }

            input, textarea, select, button {
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <h1>Create a Review</h1>
        <form method="POST" action="{{ route('reviews.store') }}">
            @csrf
            <label for="ReservationID">Reservation ID:</label>
            <input type="number" id="ReservationID" name="ReservationID" required>

            <label for="Rating">Rating:</label>
            <input type="number" id="Rating" name="Rating" required>

            <label for="Comment">Comment:</label>
            <textarea id="Comment" name="Comment" required></textarea>

            <label for="InputDate">Input Date:</label>
            <input type="date" id="InputDate" name="InputDate" required>

            <label for="TravelType">Travel Type:</label>
            <input type="text" id="TravelType" name="TravelType" required>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
