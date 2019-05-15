<?php

namespace ucare;

use Illuminate\Database\Eloquent\Model;

class healthStat extends Model
{
    protected $fillable = ['patientID','height'
    ,'weight','blood_glucose','blood_pressure'];
}
