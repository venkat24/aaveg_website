<?php

namespace App\Http\Controllers;

use Exception;
use Validator;
use App\Http\Requests;
use Sangria\JSONResponse;
use Illuminate\Http\Request;
use App\Models\EventsDetails;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function getSingleEventView($event_id) {
        try {
            $event_details = EventsDetails::where('event_id','=',$event_id)
                                          ->first();
            return view('event_single',[
                'event' => $event_details
            ]);
        } catch (Exception $e) {
            return $e-> getMessage();
        }
    }
    // Returns an object of all events along with all their properties
    // Used for main call to generate full events view
    // Events are grouped into clusters, for easy display on the frontend
    public function getAllEvents(Request $request){
        try {
            $events_raw = EventsDetails::get();
            $response=[];
            foreach ($events_raw as $value) {
                $response[$value->event_cluster][] = $value;
            }
            return JSONResponse::response(200,$response);
        } catch (Exception $e){
            return JSONResponse::response(500,$e->getMessage());
        }
    }

    // Events are grouped NOT into clusters
    public function getAllEventsUngrouped(Request $request){
        try {
            $events_raw = EventsDetails::get();
            return JSONResponse::response(200,$events_raw);
        } catch (Exception $e){
            return JSONResponse::response(500,$e->getMessage());
        }
    }
    
    // Returns an array of only the event names
    // Used for generating a dropdown list of events
    public function getAllEventNames(Request $request){
        try {
            $events_raw = EventsDetails::select("event_name")
                                       ->get();
            $response=[];
            foreach ($events_raw as $value) {
                $response[] = $value->event_name;
            }
            return JSONResponse::response(200,$response);
        } catch (Exception $e){
            return JSONResponse::response(500,$e->getMessage());
        }
    }

    // Used for fetching a particular event's details from the name
    // Used for populating the event details using the dropdown's value
    public function getEventByName(Request $request) {
        try {        
            $validator = Validator::make($request->all(),[
                'event_name' => 'required'
            ]);
            if($validator->fails()){
                return JSONResponse::response(400,"No event name passed");
            }
            $event_name = $request->input('event_name');
            $event = EventsDetails::where('event_name','=',$event_name)
                                  ->first();
            if(!$event){
                return JSONResponse::response(400,"Invalid Event Name");
            }
            return JSONResponse::response(200,$event);
        } catch (Exception $e){
            return JSONResponse::response(500,$e->getMessage());
        }
    }
    
    public function getEventsGroupedByCluster(Request $request) {
        try {
            $events = EventsDetails::get(['event_name', 'event_cluster']);
            $response = [];
            foreach ($events as $event) {
                $response[$event->event_cluster][] = $event->event_name;
            }
            return JSONResponse::response(200, $response);
        } catch (Exception $e) {
            return JSONResponse::response(500,$e->getMessage()." ".$e->getLine());
        }
    }
    
    public function getFinishedEvents(Request $request) {
        try {
            $events = EventsDetails::whereNotNull('first_place')
                                   ->where('first_place','!=','')
                                   ->orderBy('updated_at', 'asc')
                                   ->get([
                                     'first_place',
                                     'second_place',
                                     'third_place',
                                     'event_name',
                                     'event_id'
                                   ]);
            return JSONResponse::response(200, $events);
        } catch (Exception $e) {
            return JSONResponse::response(500,$e->getMessage()." ".$e->getLine());
        }
    }
}

