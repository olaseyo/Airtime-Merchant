<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class MakePayment extends Model
{
    //
	
use HasApiTokens, Notifiable;
		
	protected $connection="mysql_sendbucs";
//class User extends Authenticatable{
    protected $fillable =['account_balance','device_info','password','pin','pix_src','merchantOrmseOrAdmin','reg_status','active_status','deleted_status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'idnumber', 'password',
    ];
}
