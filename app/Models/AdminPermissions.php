<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermissions extends Model
{
    protected $table = 'admin_permissions';
    protected $fillable = ['team_id', 'admin_id'];
    public $timestamps = false;
}
