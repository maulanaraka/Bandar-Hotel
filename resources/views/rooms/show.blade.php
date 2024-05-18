@extends('layouts.app')

@section('content')
    <h1>{{ $room->RoomNumber }}</h1>
    <p>Room Type: {{ $room->RoomType }}</p>
    <p>Rate: {{ $room->Rate }}</p>
    <p>Availability: {{ $room->Availability }}</p>
    <p>Insurance: {{ $room->Insurance }}</p>
    <a href="{{ route('rooms.edit', $room) }}">Edit</a>
    <form method="POST" action="{{ route('rooms.destroy', $room) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection