<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan_applications extends Model
{
    //
    protected $guarded = [];

    public function loan_status()
    {
        return $this->belongsTo(Loan_status::class, 'loan_status_id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function guarantor_id()
    {
        return $this->belongsTo(Member::class, 'guarantor_id');
    }

    public function loan_type()
    {
        return $this->belongsTo(Loan_type::class, 'loan_type_id');
    }

}
