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
            $scoreboard = Scoreboard::get();
            return JSONResponse::response(200,$scoreboard);
        } catch (Exception $e) {
            return JSONResponse::response(400, $e);
        }
    }

    public function getCategoryScoreboard(Request $request) {
        $validator = Validator::make($request->all(),[
            'category' => 'required|in:Culturals,Sports,Miscellaneous'
        ]);
        if($validator->fails()) {
            $status_code = 400;
            $error_message = "Invalid Category Specified";
            return JSONResponse::response($status_code,$error_message);
        }
        $category = $request->input('category');
        $scoreboard = Scoreboard::join('events_details',
                                       'events_details.event_id',
                                       '=',
                                       'scoreboard.event_id')
                                ->where('event_category','=',$category)
                                ->get();
        return JSONResponse::response(200,$scoreboard);
    }
}
