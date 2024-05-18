<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;

use App\Models\Guest;
use Illuminate\Support\Facades\Validator;

class APIBillingController extends Controller
{
    public function index()
    {

        $billing = Billing::all();
        $data = [
            
            'status'=>200,
            'billing'=>$billing

        ];

        return response()->json($data,200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            "BillID"=>'required',
            "ReservationID"=> "required",
            "TotalAmount"=> "required",
            "PaymentStatus"=> "required",
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
            $billing= new Billing;

            $billing->BillID=$request->BillID;
            $billing->ReservationID=$request->ReservationID;
            $billing->TotalAmount=$request->TotalAmount;
            $billing->PaymentStatus=$request->PaymentStatus;
            $billing->CreditCardNumber=$request->CreditCardNumber;

            $billing->save();

            $data=[
                'status'=>200,
                'message'=>'data uploaded successfully'
            ];

            return response()->json($data,200);

        }
    }
}
