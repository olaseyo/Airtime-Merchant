<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Errors extends Model
{
    //
		protected $connection="mysql_sendbucs";
		
		  protected $fillable = [
        'error_id', 'page', 'function','description','datetime',
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
