<?php

namespace ucare;
use ucare\patientDetails;
use ucare\uniqueVoucher;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
   protected $fillable= ['Name','SurName','IdNumber'];

   public function patientDetails()
   {
     return $this->hasMany(patientDetails::class,'petient_id');
   }
   public function uniqueVoucher()
   {
      return $this->hasMany(uniqueVoucher::class,'patientID');
   }

   public function patientProduct()
   {
     return $this->hasMany(PatientProduct::class,'patient_id');
   }
}
