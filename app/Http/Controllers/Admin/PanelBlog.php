<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Log;
use Validator;
use Exception;
use Carbon\Carbon;
use Sangria\JSONResponse;
use App\Models\Blog;
use App\Models\BlogAuthors;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PanelBlog extends Controller
{
    public function newPost(Request $request)   {
        try {
            //valiadate request parameters
            $validator = Validator::make($request->all(), [
                'author_name'   => 'required|string',
                'title'         => 'required|string',
                'subtitle'      => 'required|string',
                'content'       => 'required|string',
                'active'        => 'required|integer',
                'image'         => 'required'
            ]);
            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }

            $author_name = $request->input('author_name');
            $author      = BlogAuthors::where('author_name', '=', $author_name)
                                    ->first();
            $author_id   = $author->author_id;

            $title       = $request->input('title');
            $subtitle    = $request->input('subtitle');
            $content     = $request->input('content');
            $active      = $request->input('active');
            $image       = $request->file('image');
            $extension   = $image->getClientOriginalExtension();
            //generate unique filename
            $filename    = str_random(5).Carbon::now().'.'.$extension;
            //strip spaces from filename
            $filename    = str_replace(' ', '', $filename);

            $blog_data = new Blog;
            $blog_data->author_id = $author_id;
            $blog_data->title = $title;
            $blog_data->subtitle = $subtitle;
            $blog_data->content = $content;
            $blog_data->image_path = $filename;
            $blog_data->active = $active;
            $blog_data->save();

            $image->move(storage_path('app'), $filename);

            return JSONResponse::response(200, 'Success');
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }
}
