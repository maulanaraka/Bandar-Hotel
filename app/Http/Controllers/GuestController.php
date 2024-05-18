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

        $guest = Guest::all();
        $data = [
            
            'status'=>200,
            'guest'=>$guest

        ];

        return response()->json($data,200);
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

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            "NIKID"=>'required',
            "Name"=> "required",
            "Email"=> "required|email",
            "Phone"=> "required",
            "Address"=> "required",
            "CreditCardNumber"=> "required",
        ]);

        if($validator->fails())
        {

            $data=[
                "status"=>422,
                "message"=>$validator->messages()
            ];

            return response()->json($data,422);

        }

        else
        {
            $guest = new Guest;

            $guest->NIKID=$request->NIKID;
            $guest->Name=$request->Name;
            $guest->Email=$request->Email;
            $guest->Phone=$request->Phone;
            $guest->Address=$request->Address;
            $guest->CreditCardNumber=$request->CreditCardNumber;

            $guest->save();

            $data=[
                'status'=>200,
                'message'=>'data uploaded successfully'
            ];

            return response()->json($data,200);

        }
    }
}
