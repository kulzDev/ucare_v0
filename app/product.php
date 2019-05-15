<?php

namespace ucare;
use ucare\benefits;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['Name','Description'];

    public function benefits()
    {
      return $this->hasMany(benefits::class,'ProductID');
    }

    public function patientProduct()
    {
      return $this->hasMany(PatientProduct::class,'product_id');
    }
}
