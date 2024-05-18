@extends('layouts.app')

@section('content')
    <h1>Create Billing</h1>
    <form method="POST" action="/billings">
        @csrf
        <label for="ReservationID">Reservation ID:</label>
        <input type="number" id="ReservationID" name="ReservationID">
        <label for="TotalAmount">Total Amount:</label>
        <input type="number" id="TotalAmount" name="TotalAmount" step="0.01">
        <label for="PaymentStatus">Payment Status:</label>
        <input type="text" id="PaymentStatus" name="PaymentStatus">
        <label for="CreditCardNumber">Credit Card Number:</label>
        <input type="number" id="CreditCardNumber" name="CreditCardNumber">
        <button type="submit">Create</button>
    </form>
@endsection