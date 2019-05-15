<?php

namespace App;
use App\patientDetails;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
   protected $fillable= ['Name','SurName','IdNumber'];

   public function patientDetails()
   {
     return $this->hasMany(patientDetails::class,'petient_id');
   }
}
