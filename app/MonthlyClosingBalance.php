<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
class MonthlyClosingBalance extends Authenticatable
{
    //
		protected $connection="mysql_sendbucs";
		
		 protected $fillable = [
			'account_id', 'balance','datetime',
    ];


   /*  protected $hidden = [
        'password', 'remember_token',
    ]; */




}
