<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Validator;
use Exception;
use App\Http\Requests;
use Sangria\JSONResponse;
use App\Models\Blog;
use App\Models\BlogAuthors;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //function to return all the blog posts(except the post content)
    public function getAllPosts(Request $request)   {
        try {       
            $blog_posts = Blog::join('blog_authors',
                                     'blog_authors.author_id', '=', 'blog.author_id')
                                    ->select(
                                        'blog.blog_id',
                                        'blog_authors.author_name',
                                        'blog.title',
                                        'blog.subtitle',
                                        'blog.updated_at')
                                    ->where('blog.active', '=', 1)
                                    ->orderBy('blog.updated_at','desc')
                                    ->get();
            return JSONResponse::response(200, $blog_posts);                        
        } catch (Exception $e) {
            Log::error($e.getMessage()." ".$e.getLine());
            return JSONResponse::response(500, $e.getMessage());
        }
    }

    //function to get latest posts
    public function getLatestPosts(Request $request)    {
        try {      
            $validator = Validator::make($request->all(), [
                'post_count' => 'required|integer'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";    //$validator->errors()->all()
                return JSONResponse::response(400, $message);
            }

            $post_count = $request->input('post_count');
            $latest_posts = Blog::join('blog_authors',
                                         'blog_authors.author_id', '=', 'blog.author_id')
                                        ->select(
                                            'blog.blog_id',
                                            'blog_authors.author_name',
                                            'blog.title',
                                            'blog.subtitle',
                                            'blog.content',
                                            'blog.updated_at')
                                        ->where('blog.active', '=', 1)
                                        ->orderBy('blog.updated_at','desc')
                                        ->take($post_count)
                                        ->get();
            return JSONResponse::response(200, $latest_posts);                            
        } catch (Exception $e) {
            Log::error($e.getMessage()." ".$e.getLine());
            return JSONResponse::response(500, $e.getMessage());
        }
    }

    //function to return a particular blog based on blog_id
    public function getBlogById(Request $request)   {
        try {
           $validator = Validator::make($request->all(), [
                'blog_id' => 'required|integer'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";    //$validator->errors()->all()
                return JSONResponse::response(400, $message);
            } 

            $blog_id = $request->input('blog_id');
            $blog_post = Blog::join('blog_authors',
                                         'blog_authors.author_id', '=', 'blog.author_id')
                                        ->select(
                                            'blog.blog_id',
                                            'blog_authors.author_name',
                                            'blog.title',
                                            'blog.subtitle',
                                            'blog.content',
                                            'blog.updated_at')
                                        ->where('blog.blog_id','=', $blog_id)
                                        ->where('blog.active', '=', 1)
                                        ->get();
            return JSONResponse::response(200, $blog_post);

        } catch (Exception $e) {
            Log::error($e.getMessage()." ".$e.getLine());
            return JSONResponse::response(500, $e.getMessage());
        }
    }

    public function getAuthors(Request $request){
        try {
            $authors = BlogAuthors::select('author_name')
                                  ->get();
            foreach ($authors as $value) {
                $response[] = $value->author_name;
            }
            return JSONResponse::response(200,$response);
        } catch (Exception $e) {
            return JSONResponse::response(500, $e.getMessage());
        }
    }
}