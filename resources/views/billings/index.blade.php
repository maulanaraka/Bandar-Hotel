@extends('layouts.app')

@section('content')
    <h1>All Billings</h1>
    <a href="/billings/create">Create New Billing</a>
    @foreach($billings as $billing)
        <div>
            <h2>Billing ID: {{ $billing->BillID }}</h2>
            <p>Reservation ID: {{ $billing->ReservationID }}</p>
            <p>Total Amount: {{ $billing->TotalAmount }}</p>
            <p>Payment Status: {{ $billing->PaymentStatus }}</p>
            <p>Credit Card Number: {{ $billing->CreditCardNumber }}</p>
            <a href="/billings/{{ $billing->BillID }}">View Details</a>
            <a href="/billings/{{ $billing->BillID }}/edit">Edit</a>
            <form method="POST" action="/billings/{{ $billing->BillID }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection