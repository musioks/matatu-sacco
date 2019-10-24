<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_booking extends Model
{
    protected $guarded = [];
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }
}
