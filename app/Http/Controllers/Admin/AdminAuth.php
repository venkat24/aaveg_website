<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Log;
use Validator;
use Exception;
use Session;
use App\Http\Requests;
use App\Models\AdminDetails;
use App\Models\AdminPermissions;
use Sangria\JSONResponse;
use App\Http\Controllers\Controller;

class AdminAuth extends Controller
{
    //function for admin login
    public function adminAuthentication(Request $request)   {
        try {
            $validator = Validator::make($request->all(),[
                'admin_roll' => 'required|digits:9',
                'admin_pass' => 'required'
                ]);

            //check for valid parameters
            if($validator->fails()) {
                $response = "Invalid Parameters"; //$validator->errors()->all();
                return JSONResponse::response(400,$response);
            }

            $admin_roll = $request->input('admin_roll');
            $admin_pass = $request->input('admin_pass');

            $admin = AdminDetails::where('admin_roll', '=', $admin_roll)
                                 ->first();
            //check if admin is registered                     
            if($admin)  {
                //match passwords
                if(sha1($admin_pass) === $admin->password)    {
                    //array to store permissions for admin
                    $permissions = AdminPermissions::where('admin_id', '=', $admin->admin_id)
                                                     ->lists('team_id')
                                                     ->toArray();
                    //set session                                 
                    Session::put(['admin_id' => $admin->admin_id,
                                  'admin_roll' => $admin_roll,
                                  'permissions' => $permissions]);                                              
                    Log::info($admin_roll." has logged in"); //logged in
                    return JSONResponse::response(200, $permissions);
                }
                else    {
                    //return 401 for unauthorized access
                    $status_code = 401;
                    $response = "Incorrect password";
                }
            }   
            else    {
                //return 401 for unauthorized access
                $status_code = 401;
                $response = "Not a registered admin";
            }     
            //the return statement for all errors
            return JSONResponse::response($status_code, $response);             
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    //function for admin logout
    public function adminLogout(Request $request)   {
        try {
            $status_code = 200;
            $response = "You have been logged out";
            //Admin has logged out
            Log::info(Session::get('admin_roll')." logged out");
            //flush Session
            Session::flush();
            return JSONResponse::response($status_code,$response);
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
        
    }
}
