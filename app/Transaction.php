<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
		protected $connection="mysql_sendbucs";
		
		  protected $fillable = [
        'from_account', 'to_account', 'amount','from_medium','to_medium','from_location','to_location','description','active_status','deleted_status','dateCreated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
 /*    protected $hidden = [
        'password', 'remember_token',
    ]; */
}
