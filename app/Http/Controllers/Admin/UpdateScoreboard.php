<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Log;
use Validator;
use Exception;
use Carbon\Carbon;
use Sangria\JSONResponse;
use App\Models\Scoreboard;
use App\Models\EventsDetails;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UpdateScoreboard extends Controller
{
    public function updateScores(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'event_name'  => 'required|string',
                'agate'       => 'required|numeric',
                'coral'       => 'required|numeric',
                'diamond'     => 'required|numeric',
                'jade'        => 'required|numeric',
                'opal'        => 'required|numeric'
            ]);
            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }
            
            $event_name = $request->input("event_name");
            $agate      = $request->input("agate");
            $coral      = $request->input("coral");
            $diamond    = $request->input("diamond");
            $opal       = $request->input("opal");

            $event_id =  EventsDetails::where('event_name','=',$event_name)
                                        ->first()->event_id;
            $scores = new Scoreboard();
            $scores->event_id = $event_id;
            $scores->agate_score = $agate;
            $scores->coral_score = $coral;
            $scores->diamond_score = $diamond;
            $scores->opal_score = $opal;

            $scores->save();
            $message = "Scoreboard updated";
            return JSONResponse::response(200, $message);

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }
}
