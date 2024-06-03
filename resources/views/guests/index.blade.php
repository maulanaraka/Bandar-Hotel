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

        .btn-primary {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #ddd;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            .btn-primary, .btn-danger {
                font-size: 14px;
                padding: 8px 16px;
            }

            .table th, .table td {
                padding: 8px;
            }
        }
    </style>

    <div class="container">
        <h1>Guests</h1>
        <a href="{{ route('guests.create') }}" class="btn-primary">Add New Guest</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NIKID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Credit Card Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guests as $guest)
                <tr>
                    <td>{{ $guest->NIKID }}</td>
                    <td>{{ $guest->Name }}</td>
                    <td>{{ $guest->Email }}</td>
                    <td>{{ $guest->Phone }}</td>
                    <td>{{ $guest->Address }}</td>
                    <td>{{ $guest->CreditCardNumber }}</td>
                    <td>
                        <a href="{{ route('guests.edit', ['guest' => $guest->NIKID]) }}" class="btn-primary">Edit Guest</a>
                        <form method="POST" action="{{ route('guests.destroy', ['guest' => $guest->NIKID]) }}" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
