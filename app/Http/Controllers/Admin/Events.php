<?php

namespace App\Http\Controllers\Admin;

use Log;
use Validator;
use Exception;
use App\Http\Requests;
use Sangria\JSONResponse;
use Illuminate\Http\Request;
use App\Models\EventsDetails;
use App\Http\Controllers\Controller;

class Events extends Controller
{
    // Function to add a new event
    // Simple insertion
    public function newEvent(Request $request){
        try {    
            $validator = Validator::make($request->all(), [
                'event_name'        => 'required|string',
                'event_start_time'  => 'required',
                'event_end_time'    => 'required',
                'event_venue'       => 'required|string',
                'event_desc'        => 'required|string',
                'event_date'        => 'required',
                'event_cluster'     => 'required|string',
                'event_category'    => 'required|string'
            ]);
            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }
            $events = [];
            $events['event_name']       = $request->input('event_name');
            $events['event_end_time']   = $request->input('event_end_time');
            $events['event_start_time'] = $request->input('event_start_time');
            $events['event_venue']      = $request->input('event_venue');
            $events['event_desc']       = $request->input('event_desc');
            $events['event_date']       = $request->input('event_date');
            $events['event_cluster']    = $request->input('event_cluster');
            $events['event_category']   = $request->input('event_category');
            $success = EventsDetails::insert($events);
            if($success){
                return JSONResponse::response(200,"Success");
            } else {
                return JSONResponse::response(400,"Failure");
            }
        }  catch (Exception $e) {
            return JSONResponse::response(500, $e.getMessage());
        }
    }
}