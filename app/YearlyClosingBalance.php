<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearlyClosingBalance extends Model
{
    //
		protected $connection="mysql_sendbucs";
		
		  protected $fillable = [
        'sn', 'account_id', 'balance','datetime',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /*  protected $hidden = [
        'password', 'remember_token',
    ]; */
}
