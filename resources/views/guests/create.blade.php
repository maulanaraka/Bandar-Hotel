@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Guest</h1>
    <form method="POST" action="{{ route('guests.store') }}">
        @csrf
        <div class="form-group">
            <label for="NIKID">NIKID</label>
            <input type="text" class="form-control" id="NIKID" name="NIKID">
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="Email">
        </div>
        <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" id="Phone" name="Phone">
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="Address" name="Address">
        </div>
        <div class="form-group">
            <label for="CreditCardNumber">Credit Card Number</label>
            <input type="text" class="form-control" id="CreditCardNumber" name="CreditCardNumber">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection