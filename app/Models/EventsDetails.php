<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventsDetails extends Model
{
    protected $table = 'events_details';
    protected $fillable = ['event_id', 'event_name', 'event_start_time', 'event_end_time', 'event_venue', 'event_desc', 'event_date', 'event_cluster'];
    public $timestamps = false;
}
