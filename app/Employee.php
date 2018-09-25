<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
	protected $connection="mysql_sendbucs";
	
	 protected $fillable = [
        'employee_id', 'account_id', 'merchant_id','email','phone','password','dateCreated','role','pix_src',
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
