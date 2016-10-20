<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['blog_id', 'author_id', 'title', 'subtitle', 'content', 'image_path', 'active'];
}
