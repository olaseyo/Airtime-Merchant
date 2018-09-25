<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersIdentityPoi extends Model
{
    //
	protected $connection="mysql";
	
	public function useridentitydb()
    {
        return $this->belongsTo('App\UserIdentityDb','idnumber');
    }
	
	  protected $fillable = [
        'idnumber', 'passport_number', 'passport_expiry_date','voters_id_number','drivers_license_number','other_govt_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
