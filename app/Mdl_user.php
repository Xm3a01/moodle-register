<?php

namespace App;

use App\Enrolment;
use Illuminate\Database\Eloquent\Model;

class Mdl_user extends Model
{
    protected $table = 'mdl_user';


    public function enrolments()
    {
        return $this->hasManay('Enrolment');
    }
}
