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
                                    ->orderBy('blog.created_at','desc')
                                    ->get();
            return JSONResponse::response(200, $blog_posts);                        
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
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
                                            'blog.image_path',
                                            'blog.updated_at')
                                        ->where('blog.active', '=', 1)
                                        ->orderBy('blog.created_at','desc')
                                        ->take($post_count)
                                        ->get();
            //return base64 encoded string for all images
            foreach($latest_posts as $blog_post)    {
                $path = storage_path('app/'.$blog_post->image_path);
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $img_data = file_get_contents($path);
                $blog_post->image_path = 'data:image/'.$type.';base64,'.base64_encode($img_data);
            }
            return JSONResponse::response(200, $latest_posts);                            
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    //function to return a particular blog based on blog_id
    public function getBlogById(Request $request)   {
        try {
           $validator = Validator::make($request->all(), [
                'blog_id' => 'required|string'
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
                                            'blog.image_path',
                                            'blog.updated_at')
                                        ->where('blog.blog_id','=', $blog_id)
                                        ->where('blog.active', '=', 1)
                                        ->first();
            //return base64 encoded string for image
            $path = storage_path('app/'.$blog_post->image_path);
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $img_data = file_get_contents($path);
            $blog_post->image_path = 'data:image/'.$type.';base64,'.base64_encode($img_data);

            return JSONResponse::response(200, $blog_post);

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    //function to return all author names
    public function getAuthors(Request $request){
        try {
            $authors = BlogAuthors::lists('author_name');
            return JSONResponse::response(200,$authors);
        } catch (Exception $e) {
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    //function to get all blog titles
    public function getBlogTitles(Request $request) {
        try {
            $blog_titles = Blog::lists('title');
            return JSONResponse::response(200, $blog_titles);
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }
}
