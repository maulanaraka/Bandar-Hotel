<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;

class BillingController extends Controller
{
    public function index()
    {
        $billings = Billing::all();
        return view('billings.index', compact('billings'));
    }

    public function create()
    {
        return view('billings.create');
    }

    public function store(Request $request)
    {
        Billing::create($request->all());
        return redirect()->route('billings.index');
    }

    public function show(Billing $billing)
    {
        return view('billings.show', compact('billing'));
    }

    public function edit(Billing $billing)
    {
        return view('billings.edit', compact('billing'));
    }

    public function update(Request $request, Billing $billing)
    {
        $billing->update($request->all());
        return redirect()->route('billings.index');
    }

    public function destroy(Billing $billing)
    {
        $billing->delete();
        return redirect()->route('billings.index');
    }

    // json api
    
}