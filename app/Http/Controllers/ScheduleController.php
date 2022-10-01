<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Validator;
use Illuminate\Support\Facades\DB;
use PDF;


class ScheduleController extends Controller {
    //

    public function addschedule ( Request $request ) {

        $validator = Validator::make( $request->all(), [

            'trip_from'=>'required',
            'trip_to'=>'required',
            'trip1'=>'required',
            'trip2'=>'required',
            'trip3'=>'required',
            'trip4'=>'required',
            'trip5'=>'required',

        ]);

        Schedule::create( [
            'trip_from'=>$request->trip_from,
            'trip_to'=>$request->trip_to,
            'trip1'=>$request->trip1,
            'trip2'=>$request->trip2,
            'trip3'=>$request->trip3,
            'trip4'=>$request->trip4,
            'trip5'=>$request->trip5,
        ]);
    }

    public function getschedule(){

        $schedule = DB::table('schedules')->get();
        return response()->json($schedule,200);
    }

    public function deleteschedule($id){

        $schedule = schedule::find($id);
        $schedule->delete();

    }

    public function printschedule($id){
        //get schedule
        $schedule = schedule::find($id);

        $pdf = PDF::loadView('exports.schedule', [
            'schedule' => $schedule
        ]);

        return $pdf->download('schedule.pdf');
    }
}
