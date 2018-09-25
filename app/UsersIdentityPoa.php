<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersIdentityPoa extends Model
{
    //
		protected $connection="mysql";
	public function useridentitydb()
    {
        return $this->belongsTo('App\UserIdentityDb','idnumber');
    }
	
	  protected $fillable = [
        'user_identity_poas_id', 'idnumber', 'addressline_one','addressline_one_type','addressline_two','addressline_two_type','city','zipcode','state','country','country_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
/*     protected $hidden = [
        'password', 'remember_token',
    ]; */
}
