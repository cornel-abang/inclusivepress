<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSet extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',   
        'event_state',
        'event_lga',
        'event_local',
        'event_fatalities',
        'event_latitude',
        'event_longitude',
        'event_zone',
        'event_state_slug',
        'event_date',
        'event_year',
        'type'
    ];
}
