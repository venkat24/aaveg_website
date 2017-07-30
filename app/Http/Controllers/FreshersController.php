<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Log;
use Excel;
use Validator;
use Exception;
use Carbon\Carbon;
use Sangria\JSONResponse;
use App\Models\Freshers;

class FreshersController extends Controller
{
    public function submit(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'          => 'required|string',
            'rollNo'        => 'required|integer|digits:9',
            'dept'          => 'required|string',
            'mobile'        => 'required|string',
            'email'         => 'required',
            'ques1'         => 'required',
            'ques2'         => 'required'
        ]);
        if($validator->fails()) {
            $message = $validator->errors()->all();
            Log::info($validator->errors()->all());
            return 'Submission Failed. Please Try Again. Ensure that all fields are filled.';
        }

        $name   = $request->input('name');
        $rollNo = $request->input('rollNo');
        $dept   = $request->input('dept');
        $mobile = $request->input('mobile');
        $email  = $request->input('email');
        $ques1  = $request->input('ques1');
        $ques2  = $request->input('ques2');

        $data = new Freshers();
        $data->name   = $name;
        $data->rollNo = $rollNo;
        $data->dept   = $dept;
        $data->mobile = $mobile;
        $data->email  = $email;
        $data->ques1  = $ques1;
        $data->ques2  = $ques2;
        $data->save();

        return 'Submitted Successfully';
    }

    public function adminView(Request $request) {
        $freshers = Freshers::get();
        return view('admin.admin_freshers', [
            'freshers' => $freshers,
        ]);
    }

    public function exportToExcel(Request $request) {
        $freshers = Freshers::get();
        Excel::create('freshers', function($excel) use ($freshers) {
            $excel->setTitle('Freshers');

            $excel->sheet('sheet1', function($sheet) use ($freshers) {
                $sheet->fromArray($freshers, null, 'A1', false, false);
            });
        })->download('xlsx');
    }
}
