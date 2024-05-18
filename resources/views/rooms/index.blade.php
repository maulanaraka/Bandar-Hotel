@extends('layouts.app')

@section('content')
    <h1>Rooms</h1>
    <a href="{{ route('rooms.create') }}">Create Room</a>
    <ul>
        @foreach($rooms as $room)
            <li>
                <a href="{{ route('rooms.show', $room) }}">{{ $room->RoomNumber }}</a>
            </li>
        @endforeach
    </ul>
@endsection