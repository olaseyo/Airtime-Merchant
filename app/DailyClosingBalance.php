<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyClosingBalance extends Model
{
    //
	protected $connection="mysql_sendbucs";
	
	 protected $fillable = [
        'closing_balance_id', 'account_id', 'balance','datetime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /* protected $hidden = [
        'password', 'remember_token',
    ]; */
}
