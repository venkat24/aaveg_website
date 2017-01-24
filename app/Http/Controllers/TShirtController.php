<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Session;
use Redirect;
use Validator;
use Exception;
use Sangria\JSONResponse;
use App\Models\TshirtDetails;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TShirtController extends Controller
{
    public function registerForTshirt(Request $request)    {
        try {
            $validator = Validator::make($request->all(), [
                'size'   => 'required',
                'hostel' => 'required',
                'name'   => 'required',
            ]);

            if($validator->fails()) {
                $message = $validator->errors()->all();
                return JSONResponse::response(400, $message);
            }

            $roll_no = Session::get('roll_no');

            $checkForRegistration = TshirtDetails::where('roll_no','=',$roll_no)
                                                 ->first();

            if(!$checkForRegistration) {
                $insertResp = TshirtDetails::insert([
                    'roll_no' => Session::get('roll_no'),
                    'size'    => $request->input('size'),
                    'hostel'  => $request->input('hostel'),
                    'name'    => $request->input('name'),
                ]);
            }
            return view('already_registered');

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    public function getTshirtPage(Request $request) {
        $roll_no = Session::get('roll_no');
        if(!$roll_no) {
            return Redirect::to('/tshirt');
        } else {
            $regCheck = TshirtDetails::where('roll_no','=',$roll_no)
                                     ->first();
            if($regCheck) {
                return view('already_registered');
            } else {
                return view('tshirt');
            }
        }
    }
}
