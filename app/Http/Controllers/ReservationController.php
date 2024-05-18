<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $reservation = new Reservation;
        $reservation->fill($request->all());
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->fill($request->all());
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}