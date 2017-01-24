<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Log;
use Validator;
use Exception;
use Carbon\Carbon;
use Sangria\JSONResponse;
use App\Models\Photography;

class PhotographyController extends Controller
{
    public function submitPhoto(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string',
            'roll_no' => 'required|integer|digits:9',
            'hostel'  => 'required|string',
            'image'   => 'required'
        ]);
        if($validator->fails()) {
            $message = $validator->errors()->all();
            Log::info($validator->errors()->all());
            return 'Submission Failed. Please Try Again. Ensure the filesize of the image is less than 3Mb.';
        }

        $name     = $request->input('name');
        $roll_no  = $request->input('roll_no');
        $hostel   = $request->input('hostel');

        $image  = $request->file('image');
        $extension = $image->getClientOriginalExtension();

        $filename = $roll_no.'_'.Carbon::now().$extension;
        $filename = str_replace(' ','',$filename);

        $data = new Photography();
        $data->name = $name;
        $data->roll_no = $roll_no;
        $data->hostel = $hostel;
        $data->image_path = $filename;
        $data->save();

        $image->move(storage_path('photography'), $filename);

        return 'Submitted Successfully';
    }
}
