<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIdentityDb extends Model
{
    //
	protected $connection="mysql";
	
	
	public function usersidentitypoi()
    {
        return $this->hasOne('App\UsersIdentityPoi','idnumber');
    }
	
	
	public function usersidentitypoa()
    {
        return $this->hasOne('App\UsersIdentityPoa','idnumber');
    }
	
	  protected $fillable = [
        'firstname', 'lastname', 'othername', 'email', 'deleted_status', 'active_status', 'registration_date', 'gender', 'marital_status', 'citizenship', 'occupation','continent','phone_one','phone_two','relations_identity_concatenated','photo','date_of_birth',
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
