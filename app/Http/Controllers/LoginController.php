<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Validator;
use Exception;
use Redirect;
use Session;
use Sangria\IMAPAuth;
use Sangria\JSONResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function tshirtLogin(Request $request) {
        try {
            $validator = Validator::make($request->all(),[
                'roll_no'  => 'required|digits:9',
                'password' => 'required'
            ]);

            //check for valid parameters
            if($validator->fails()) {
                $response = $validator->errors()->all();
                return JSONResponse::response(400,$response);
            }

            $roll_no  = $request->input('roll_no');
            $username = $roll_no."@nitt.edu";

            $password = $request->input('password');
            
            echo $username;
            echo $password;

            if(IMAPAuth::tauth($username,$password)) {
                Log::info($roll_no." has logged in");
                Session::put([
                    'roll_no' => $roll_no,
                ]);

                $status_code = 200;
                $message = "Success";

                return Redirect::to('/tshirt/register');
            } else {
                Log::info($roll_no." has attempted to login and failed");
                $status_code = 400;
                $message = "Failure";
                return JSONResponse::response($status_code,$message);
            }
        } catch (Exception $e) {
            $status_code = 500;
            $response = $e->getMessage()." ".$e->getLine();
            Log::error($response);        
            return JSONResponse::response($status_code,$response);
        }
    }
    public function tshirtLogout(Request $request) {
        try {
            $status_code = 200;
            $response = "You have been logged out";
            Log::info(Session::get('roll_no')." logged out");
            Session::flush();
            return JSONResponse::response($status_code,$response);
        } catch (Exception $e) {
            $status_code = 500;
            $response = $e->getMessage()." ".$e->getLine();
            return JSONResponse::response($status_code,$response);
        }
    }
}
