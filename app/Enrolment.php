<?php

namespace App;

use App\Mdl_user;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    protected $table = 'mdl_user_enrolments'; 

    public function mdl_user()
    {
        return $this->belongsTo('Mdl_user');
    }
}
