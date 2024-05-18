<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;
use Illuminate\Support\Facades\Validator;

class APIRoomController extends Controller
{
    public function index()
    {
        $room = Room::all();
        $data = [
            
            'status'=>200,
            'room'=>$room

        ];

        return response()->json($data,200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            "RoomID"=>'required',
            "RoomNumber"=> "required",
            "RoomType"=> "required",
            "Rate"=> "required",
            "Availability"=> "required",
            "Insurance"=> "required",
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
            $room = new Room;

            $room->RoomID=$request->RoomID;
            $room->RoomNumber=$request->RoomNumber;
            $room->RoomType=$request->RoomType;
            $room->Rate=$request->Rate;
            $room->Availability=$request->Availability;
            $room->Insurance=$request->Insurance;

            $room->save();

            $data=[
                'status'=>200,
                'message'=>'data uploaded successfully'
            ];

            return response()->json($data,200);

        }
    }
}
