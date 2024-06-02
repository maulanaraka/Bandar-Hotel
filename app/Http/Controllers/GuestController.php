<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
        Guest::create($request->all());
        return redirect()->route('guests.index');
    }

    public function show($NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        return view('guests.show', compact('guest'));
    }

    public function edit($NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, $NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        $guest->update($request->all());
        return redirect()->route('guests.index');
    }

    public function destroy($NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        $guest->delete();
        return redirect()->route('guests.index');
    }
}