<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Validator;
use Illuminate\Support\Facades\DB;
//use Barryvdh\DomPDF\Pdf;
use PDF;


class BookingController extends Controller {
    //

    public function addbooking( Request $request ) {

        $validator = Validator::make( $request->all(), [
            'booked_by'=>'required',
            'trip_from'=>'required',
            'trip_to'=>'required',
            'date_trip'=>'required',
            'time_trip'=>'required',
            'accepted_check'=>'required',
        ] );

        Booking::create([
            'booked_by'=>$request->booked_by,
            'trip_from'=>$request->trip_from,
            'trip_to'=>$request->trip_to,
            'date_trip'=>$request->date_trip,
            'time_trip'=>$request->time_trip,
            'accepted_check'=>$request->accepted_check,
        ]);

    }


    //get bookings method
    public function getbookings(){
        
        $bookings = DB::table('bookings')->get();
        return response()->json($bookings,200);
    }


    public function exportbooking(){ 
        
        $bookings = DB::table('bookings')->get();
        
        $pdf = PDF::loadView('exports.userbok', [
            'bookings' => $bookings
        ]);

        
        return $pdf->download('bookings.pdf');
    
    }

    public function updatebooking($id) {
        $booking = booking::find($id);
        $booking->accepted_check = 1;
        $booking->save();

    }
}
