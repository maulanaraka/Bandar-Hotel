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
            margin-bottom: 40px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 300px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>

    <h1>Create Room</h1>
    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        <label for="RoomNumber">Room Number:</label>
        <input type="text" id="RoomNumber" name="RoomNumber" required>
        
        <label for="RoomType">Room Type:</label>
        <input type="text" id="RoomType" name="RoomType" required>
        
        <label for="Rate">Rate:</label>
        <input type="number" id="Rate" name="Rate" required>
        
        <label for="Availability">Availability:</label>
        <input type="text" id="Availability" name="Availability" required>
        
        <label for="Insurance">Insurance:</label>
        <input type="text" id="Insurance" name="Insurance" required>
        
        <button type="submit">Create</button>
    </form>
@endsection
