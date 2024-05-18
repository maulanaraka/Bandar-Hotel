<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;

class APIReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();
        $data = [
            
            'status'=>200,
            'reservation'=>$reservation

        ];

        return response()->json($data,200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            "ReservationID"=>'required',
            "NIKID"=> "required",
            "RoomID"=> "required",
            "CheckInDate"=> "required",
            "CheckOutDate"=> "required",
            "TotalAmount"=> "required",
            "idPenyewaanMobil" => "required"
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
            $reservation = new Reservation();

            $reservation->ReservationID=$request->ReservationID;
            $reservation->NIKID=$request->NIKID;
            $reservation->RoomID=$request->RoomID;
            $reservation->CheckInDate=$request->CheckInDate;
            $reservation->CheckOutDate=$request->CheckOutDate;
            $reservation->TotalAmount=$request->TotalAmount;
            $reservation->idPenyewaanMobil=$request->idPenyewaanMobil;

            $reservation->save();

            $data=[
                'status'=>200,
                'message'=>'data uploaded successfully'
            ];

            return response()->json($data,200);

        }
    }
}
