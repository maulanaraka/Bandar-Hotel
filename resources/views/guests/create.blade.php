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

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-primary {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            .form-control {
                padding: 10px;
            }

            .btn-primary {
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <h1>Add New Guest</h1>
        <form method="POST" action="{{ route('guests.store') }}">
            @csrf
            <div class="form-group">
                <label for="NIKID">NIKID</label>
                <input type="text" class="form-control" id="NIKID" name="NIKID">
            </div>
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" name="Email">
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" name="Phone">
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" id="Address" name="Address">
            </div>
            <div class="form-group">
                <label for="CreditCardNumber">Credit Card Number</label>
                <input type="text" class="form-control" id="CreditCardNumber" name="CreditCardNumber">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
