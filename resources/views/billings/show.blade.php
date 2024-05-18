@extends('layouts.app')

@section('content')
    <h1>Billing ID: {{ $billing->BillID }}</h1>
    <p>Reservation ID: {{ $billing->ReservationID }}</p>
    <p>Total Amount: {{ $billing->TotalAmount }}</p>
    <p>Payment Status: {{ $billing->PaymentStatus }}</p>
    <p>Credit Card Number: {{ $billing->CreditCardNumber }}</p>
    <a href="/billings/{{ $billing->BillID }}/edit">Edit</a>
    <form method="POST" action="/billings/{{ $billing->BillID }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection