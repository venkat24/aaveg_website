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
                                        'blog.created_at')
                                    ->where('blog.active', '=', 1)
                                    ->orderBy('blog.created_at','desc')
                                    ->get();
            return JSONResponse::response(200, $blog_posts);
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    //function to return all the blog Ids in rev-chron order
    public function getAllBlogIds(Request $request)   {
        try {
            $blog_raw = Blog::select('blog_id')
                            ->where('blog.active', '=', 1)
                            ->orderBy('blog.created_at','desc')
                            ->get();
            $blog_posts = [];
            foreach ($blog_raw as $blog) {
                array_push($blog_posts,$blog["blog_id"]);
            }
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
                'post_count' => 'required|integer',
                'only_titles' => ''
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";    //$validator->errors()->all()
                return JSONResponse::response(400, $message);
            }
            if(!($request->has('only_titles'))) {
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
                                            'blog.created_at')
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
            } else {

            $post_count = $request->input('post_count');
            $latest_posts = Blog::join('blog_authors',
                                         'blog_authors.author_id', '=', 'blog.author_id')
                                        ->select(
                                            'blog.blog_id',
                                            'blog.title')
                                        ->where('blog.active', '=', 1)
                                        ->orderBy('blog.created_at','desc')
                                        ->take($post_count)
                                        ->get();
            } 
            return JSONResponse::response(200, $latest_posts);
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    //function to return a particular blog based on blog_id
    //if blog_id_end is supplied, it returns an array of blogs lying in that range
    public function getBlogById(Request $request)   {
        try {
            $validator = Validator::make($request->all(), [
               'blog_id' => 'required|integer',
               'blog_id_end' => 'integer',
               'only_image' => 'string'
            ]);

            if($validator->fails()) {
                $message = $validator->errors()->all();
                return JSONResponse::response(400, $message);
            }

            $blog_id = $request->input('blog_id');
            if(!($request->has('blog_id_end'))) {
                if(!($request->has('only_image'))) {
                $blog_post = Blog::join('blog_authors',
                                   'blog_authors.author_id', '=', 'blog.author_id')
                                  ->select(
                                      'blog.blog_id',
                                      'blog_authors.author_name',
                                      'blog.title',
                                      'blog.subtitle',
                                      'blog.content',
                                      'blog.image_path',
                                      'blog.created_at')
                                  ->where('blog.blog_id','=',$blog_id)
                                  ->where('blog.active', '=', 1)
                                  ->first();
                $path = storage_path('app/'.$blog_post->image_path);
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $img_data = file_get_contents($path);
                $blog_post->image_path = 'data:image/'.$type.';base64,'.base64_encode($img_data);

                return JSONResponse::response(200, $blog_post);

                } else {
                    if($request->input("only_image") == "yes") {
                        $blog_post = Blog::join('blog_authors',
                                           'blog_authors.author_id', '=', 'blog.author_id')
                                          ->select('blog.image_path')
                                          ->where('blog.blog_id','=',$blog_id)
                                          ->where('blog.active', '=', 1)
                                          ->first();
                        $path = storage_path('app/'.$blog_post->image_path);
                        $type = pathinfo($path, PATHINFO_EXTENSION);
                        $img_data = file_get_contents($path);
                        $blog_post->image_path = 'data:image/'.$type.';base64,'.base64_encode($img_data);

                        return JSONResponse::response(200, $blog_post);
                    } else if ($request->input("only_image") == "no") {
                        $blog_post = Blog::join('blog_authors',
                                           'blog_authors.author_id', '=', 'blog.author_id')
                                          ->select(
                                              'blog.blog_id',
                                              'blog_authors.author_name',
                                              'blog.title',
                                              'blog.subtitle',
                                              'blog.content',
                                              'blog.created_at')
                                          ->where('blog.blog_id','=',$blog_id)
                                          ->where('blog.active', '=', 1)
                                          ->first();
                        return JSONResponse::response(200, $blog_post);
                }
              }

            } else {
                $blog_id_end = $request->input('blog_id_end');

                $start_time = Blog::where('blog_id','=',$blog_id)
                                  ->first();

                $end_time   = Blog::where('blog_id','=',$blog_id_end)
                                  ->first();

                $blog_posts = Blog::join('blog_authors',
                                             'blog_authors.author_id', '=', 'blog.author_id')
                                            ->select(
                                                'blog.blog_id',
                                                'blog_authors.author_name',
                                                'blog.title',
                                                'blog.subtitle',
                                                'blog.created_at')
                                            ->whereBetween('blog.created_at',[$end_time->created_at, $start_time->created_at])
                                            ->where('blog.active', '=', 1)
                                            ->orderBy('blog.created_at','desc')
                                            ->get();
                return JSONResponse::response(200, $blog_posts);
          }

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
