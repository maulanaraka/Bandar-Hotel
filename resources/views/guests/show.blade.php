@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Guest Details</h1>
    <p>NIKID: {{ $guest->NIKID }}</p>
    <p>Name: {{ $guest->Name }}</p>
    <p>Email: {{ $guest->Email }}</p>
    <p>Phone: {{ $guest->Phone }}</p>
    <p>Address: {{ $guest->Address }}</p>
    <p>Credit Card Number: {{ $guest->CreditCardNumber }}</p>
</div>
@endsection