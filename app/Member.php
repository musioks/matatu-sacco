<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'fname', 'lname', 'nid', 'dob', 'phone', 'email', 'residence' . 'nok', 'relationship', 'coop_id'
    ];
}
