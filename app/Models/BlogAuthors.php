<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogAuthors extends Model
{
    protected $table = 'blog_authors';
    protected $fillable =['author_id', 'author_name'];
    public $timestamps = false;
}
