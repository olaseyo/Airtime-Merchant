<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    //
		protected $connection="mysql_sendbucs";
		
		  protected $fillable = [
        'account_id', 'business_idnumber', 'business_category', 'product_category', 'datecreated', 'active_status', 'deleted_status',
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
