@extends('layouts.app')

@section('content')
    <h1>Reviews</h1>
    <a href="{{ route('reviews.create') }}">Create a new review</a>
    <ul>
        @foreach($reviews as $review)
            <li>
                <a href="{{ route('reviews.show', $review->ReviewID) }}">
                    {{ $review->Comment }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection