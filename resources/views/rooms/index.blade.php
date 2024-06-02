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
            color: #333;
            margin-bottom: 20px;
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

        .room-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .room-list li {
            margin-bottom: 10px;
        }

        .room-list a {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .room-list a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>

    <h1>Rooms</h1>
    <div class="button-container">
        <a href="{{ route('rooms.create') }}">Create Room</a>
    </div>
    <ul class="room-list">
        @foreach($rooms as $room)
            <li>
                <a href="{{ route('rooms.show', $room->RoomID) }}">{{ $room->RoomNumber }}</a>
            </li>
        @endforeach
    </ul>
@endsection
