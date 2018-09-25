<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenServer extends Model
{
    //
		protected $connection="mysql_sendbucs";
		
		  protected $fillable = [
        'account_id', 'token', 'duration','amount','rc_or_mk','date_created','active_status','deleted_status',
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
