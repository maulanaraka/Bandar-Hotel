@extends('layouts.app')

@section('content')
    <h1>Create Room</h1>
    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        <label for="RoomNumber">Room Number:</label>
        <input type="text" id="RoomNumber" name="RoomNumber">
        <label for="RoomType">Room Type:</label>
        <input type="text" id="RoomType" name="RoomType">
        <label for="Rate">Rate:</label>
        <input type="number" id="Rate" name="Rate">
        <label for="Availability">Availability:</label>
        <input type="text" id="Availability" name="Availability">
        <label for="Insurance">Insurance:</label>
        <input type="text" id="Insurance" name="Insurance">
        <button type="submit">Create</button>
    </form>
@endsection