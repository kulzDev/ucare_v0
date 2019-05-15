<?php

namespace ucare;
use ucare\benefits;
use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    protected $fillable=['Name','Description'];
    
    public function benefits()
    {
      return $this->hasMany(benefits::class,'VoucherID');
    }
}
