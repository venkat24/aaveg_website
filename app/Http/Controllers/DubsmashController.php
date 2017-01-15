<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Log;
use Carbon;
use Validator;
use Exception;
use Sangria\JSONResponse;
use App\Models\Dubsmash;

class DubsmashController extends Controller
{
    public function submitDubsmash(Request $request) {
        $validator = Validator::make($request->all(), [
            'name1'         => 'required|string',
            'name2'         => '',
            'rollNo1'       => 'required|integer|digits:9',
            'rollNo2'       => '',
            'hostel'        => 'required|string',
            'dubsmash-file' => 'required'
        ]);
        if($validator->fails()) {
            $message = $validator->errors()->all();
            return JSONResponse::response(400, $message);
        }

        $name1    = $request->input('name1');
        $name2    = $request->input('name2');
        $rollNo1  = $request->input('rollNo1');
        $rollNo2  = $request->input('rollNo2');
        $hostel   = $request->input('hostel');

        $video  = $request->file('dubsmash-file');
        $extension = $video->getClientOriginalExtension();

        $filename = $rollNo1.'_'.Caarbon::now();
        $filename = str_replace(' ','',$filename);

        $data = new Dubsmash;
        $data->name1 = $name1;
        $data->name2 = $name2;
        $data->rollNo1 = $rollNo1;
        $data->rollNo2 = $rollNo2;
        $data->hostel = $hostel;
        $data->video_path = $filename;
        $data->save();

        $video->move(storage_path('dubsmash'), $filename);

        return JSONResponse::response(200, 'Submitted Successfully');
    }
}