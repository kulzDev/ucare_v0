<?php

namespace ucare;

use Illuminate\Database\Eloquent\Model;

class uniqueVoucher extends Model
{
    protected $fillable = ['BenefitID','patientID',
    'voucherNum','voucherStartDate','empoyeeID',
    'RedeemDate','Active','voucherName'];
}
