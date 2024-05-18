@extends('layouts.app')

@section('content')
    <h1>Edit Billing</h1>
    <form method="POST" action="/billings/{{ $billing->BillID }}">
        @csrf
        @method('PUT')
        <label for="ReservationID">Reservation ID:</label>
        <input type="number" id="ReservationID" name="ReservationID" value="{{ $billing->ReservationID }}">
        <label for="TotalAmount">Total Amount:</label>
        <input type="number" id="TotalAmount" name="TotalAmount" step="0.01" value="{{ $billing->TotalAmount }}">
        <label for="PaymentStatus">Payment Status:</label>
        <input type="text" id="PaymentStatus" name="PaymentStatus" value="{{ $billing->PaymentStatus }}">
        <label for="CreditCardNumber">Credit Card Number:</label>
        <input type="number" id="CreditCardNumber" name="CreditCardNumber" value="{{ $billing->CreditCardNumber }}">
        <button type="submit">Update</button>
    </form>
@endsection