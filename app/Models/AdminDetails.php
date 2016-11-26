<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminDetails extends Model
{
    protected $table = 'admin_details';
    protected $fillable = ['admin_id', 'admin_roll', 'password'];
    public $timestamps = false;
}
