<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginSession extends Model
{
    //
		protected $connection="mysql_sendbucs";
		
		  protected $fillable = [
        'account_id', 'refreshtoken_id', 'refreshtoken_id_hashed','duration_secs','createdTime','decryptMasterkey',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  /*   protected $hidden = [
        'password', 'remember_token',
    ]; */
}
