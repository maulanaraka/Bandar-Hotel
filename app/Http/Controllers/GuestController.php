<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guest;
use Illuminate\Support\Facades\Validator;

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

    public function show(Guest $guest)
    {
        return view('guests.show', compact('guest'));
    }

    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, Guest $guest)
    {
        $guest->update($request->all());
        return redirect()->route('guests.index');
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index');
    }

}
