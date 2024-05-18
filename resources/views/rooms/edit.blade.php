@extends('layouts.app')

@section('content')
    <h1>Edit Room</h1>
    <form method="POST" action="{{ route('rooms.update', $room) }}">
        @csrf
        @method('PUT')
        <label for="RoomNumber">Room Number:</label>
        <input type="text" id="RoomNumber" name="RoomNumber" value="{{ $room->RoomNumber }}">
        <label for="RoomType">Room Type:</label>
        <input type="text" id="RoomType" name="RoomType" value="{{ $room->RoomType }}">
        <label for="Rate">Rate:</label>
        <input type="number" id="Rate" name="Rate" value="{{ $room->Rate }}">
        <label for="Availability">Availability:</label>
        <input type="text" id="Availability" name="Availability" value="{{ $room->Availability }}">
        <label for="Insurance">Insurance:</label>
        <input type="text" id="Insurance" name="Insurance" value="{{ $room->Insurance }}">
        <button type="submit">Update</button>
    </form>
@endsection