@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 {
            text-align: center;
            color: red;
            margin-bottom: 30px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .button-container a {
            display: block;
            width: 250px;
            text-align: center;
            margin: 10px;
            padding: 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button-container a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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

            .btn {
                font-size: 14px;
            }

            li a {
                font-size: 14px;
            }

            .table th, .table td {
                padding: 8px;
            }
        }
    </style>

    <h1>Rooms</h1>
    <div class="button-container">
        <a href="{{ route('rooms.create') }}">Create Room</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>RoomID</th>
                <th>RoomNumber</th>
                <th>RoomType</th>
                <th>Type</th>
                <th>Rate</th>
                <th>Availability</th>
                <th>Insurance</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->RoomID }}</td>
                    <td>{{ $room->RoomNumber }}</td>
                    <td>{{ $room->RoomType }}</td>
                    <td>{{ $room->Type }}</td>
                    <td>{{ $room->Rate }}</td>
                    <td>{{ $room->Availability }}</td>
                    <td>{{ $room->Insurance }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
