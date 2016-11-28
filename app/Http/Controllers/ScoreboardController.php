<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Exception;
use App\Http\Requests;
use Sangria\JSONResponse;
use App\Models\Scoreboard;
use App\Http\Controllers\Controller;

class ScoreboardController extends Controller
{
    public function getFullScoreboard(Request $request) {
        try {    
            $scoreboard = Scoreboard::join('events_details',
                                           'events_details.event_id',
                                           '=',
                                           'scoreboard.event_id'
                                          )
                                    ->select('events_details.event_name',
                                             'events_details.event_category',
                                             'scoreboard.*'
                                            )
                                    ->get();
            $response = [];
            foreach ($scoreboard as $value) {
                $response[$value->event_category][] = $value;
            }                        
            return JSONResponse::response(200,$response);
        } catch (Exception $e) {
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    public function getEventScores(Request $request) {
        $validator = Validator::make($request->all(),[
            'event_name' => 'required'
        ]);
        if($validator->fails()) {
            $status_code = 400;
            $error_message = "No Event Specified";
            return JSONResponse::response($status_code,$error_message);
        }
        $event_name = $request->input('event_name');
        $scoreboard = Scoreboard::join('events_details',
                                       'events_details.event_id',
                                       '=',
                                       'scoreboard.event_id')
                                ->where('event_name','=',$event_name)
                                ->get();
        return JSONResponse::response(200,$scoreboard);
    }
}
