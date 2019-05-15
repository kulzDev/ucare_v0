<?php

namespace ucare;

use Illuminate\Database\Eloquent\Model;

class patientDetails extends Model
{
    protected $fillabe = ['_method','petient_id','email','phoneNumber','Address'];
}
