<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scoreboard extends Model
{
    protected $table = 'scoreboard';
    protected $fillable = ['event_id', 'diamond_score', 'agate_score', 'coral_score', 'jade_score', 'opal_score'];
    public $timestamps = false;
}
