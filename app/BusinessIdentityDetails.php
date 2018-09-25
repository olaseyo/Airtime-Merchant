<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessIdentityDetails extends Model
{
    //
	protected $connection="mysql_sendbucs";
	
	 protected $fillable = [
        'idnumber', 'business_name', 'business_address','business_description','website','legal_document_link','legalid_number','business_email','country','state','office_phone_one','office_phone_two','continent','registration_date','business_logo_link','active_status','deleted_status',
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
