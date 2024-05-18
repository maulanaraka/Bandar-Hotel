<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class APIReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        $data = [
            
            'status'=>200,
            'review'=>$review

        ];

        return response()->json($data,200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),

        [
            "ReviewID"=>'required',
            "ReservationID"=> "required",
            "Rating"=> "required",
            "Comment"=> "required",
            "InputDate"=> "required",
            "TravelType"=> "required",
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
            $review = new review;

            $review->ReviewID=$request->ReviewID;
            $review->ReservationID=$request->ReservationID;
            $review->Rating=$request->Rating;
            $review->Comment=$request->Comment;
            $review->InputDate=$request->InputDate;
            $review->TravelType=$request->TravelType;

            $review->save();

            $data=[
                'status'=>200,
                'message'=>'data uploaded successfully'
            ];

            return response()->json($data,200);

        }
    }
}
