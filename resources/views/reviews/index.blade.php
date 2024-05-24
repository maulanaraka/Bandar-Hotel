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

        .btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        li a:hover {
            color: #0056b3;
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
        }
    </style>

    <div class="container">
        <h1>Reviews</h1>
        <a href="{{ route('reviews.create') }}" class="btn">Create a new review</a>
        <ul>
            @foreach($reviews as $review)
                <li>
                    <a href="{{ route('reviews.show', $review->ReviewID) }}">
                        {{ $review->Comment }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
