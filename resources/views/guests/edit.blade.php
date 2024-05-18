@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Guest</h1>
    <form method="POST" action="{{ route('guests.update', $guest) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NIKID">NIKID</label>
            <input type="text" class="form-control" id="NIKID" name="NIKID" value="{{ $guest->NIKID }}">
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" value="{{ $guest->Name }}">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="{{ $guest->Email }}">
        </div>
        <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" id="Phone" name="Phone" value="{{ $guest->Phone }}">
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="Address" name="Address" value="{{ $guest->Address }}">
        </div>
        <div class="form-group">
            <label for="CreditCardNumber">Credit Card Number</label>
            <input type="text" class="form-control" id="CreditCardNumber" name="CreditCardNumber" value="{{ $guest->CreditCardNumber }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection