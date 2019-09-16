<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $guarded = [];

    public function loan_application()
    {
        return $this->belongsTo(Loan_applications::class, 'loan_application_id');
    }

    public function loan_status()
    {
        return $this->belongsTo(Loan_status::class, 'loan_status_id');
    }
}
