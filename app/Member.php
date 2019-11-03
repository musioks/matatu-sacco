<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }
    public function insurances()
    {
        return $this->hasMany(Insurance::class, 'member_id');
    }
    public function shares()
    {
        return $this->hasMany(Share::class, 'member_id');
    }
    public function member_status()
    {
        return $this->belongsTo(Member_status::class, 'member_status_id');
    }
}
