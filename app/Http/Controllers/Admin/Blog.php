<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Validator;
use App\Models\Blog;
use App\Http\Requests;
use Sangria\JSONResponse;
use App\Models\BlogAuthors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Blog extends Controller
{
    //function to add a new blog post
    public function newPost(Request $request) {
        try {    
            $validator = Validator::make($request->all(), [
                'author_name' => 'required',
                'title'       => 'required',
                'subtitle'    => 'required',
                'content'     => 'required',
                'active'      => 'required'
            ]);
            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }
            $author_name = $request->input('author_name');
            $author_id = BlogAuthors::where('author_name','='.$author_name)
                                    ->get();

            $title = $request->input('title');
            $subtitle = $request->input('subtitle');
            $content = $request->input('content');
            $active = $request->input('active');
            Blog::insert(
                    'author_id' => $author_id,
                    'title'     => $title,
                    'subtitle'  => $subtitle,
                    'content'   => $content,
                    'active'    => $active,
                        );
            return JSONResponse::response(200,'Success');
        } catch (Exception $e) {
            return JSONResponse::response(500, $e.getMessage());
        }
    }
}