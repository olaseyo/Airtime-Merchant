<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $connection="mysql_sendbucs";
	
	 protected $fillable = [
        'account_id', 'loan_amount', 'purpose','monthly_income','payback_duration',
    ];
}
