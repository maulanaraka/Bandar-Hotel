<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guest;
use Illuminate\Support\Facades\Validator;

class APIGuestController extends Controller
{
    public function index()
    {

        $guest = Guest::all();
        $data = [
            
            'status'=>200,
            'guest'=>$guest

        ];

        return response()->json($data,200);
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
